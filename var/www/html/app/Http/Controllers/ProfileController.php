<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    /**
     * Display the usuario's profile form.
     */
    public function mostrar(Request $request): View
    {
        $usuario = Auth::user();

        // Verificar si el usuario puede ver su perfil
        Gate::authorize('viewProfile', $usuario);

        return view('dashboard', compact('usuario'));
    }
    /**
     * Update the usuario's profile information.
     */
    public function patch(ProfileUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated([
            'nombre_usuario' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:6|confirmed',
            'profile_photo' => 'nullable|image|max:2048',
        ]);
        $usuario = Auth::user();
        // Solo actualizar la contraseña si se proporciona
        if (!empty($validatedData['password'])) {
            $request->usuario->password = bcrypt($validatedData['password']);
        }

        // Manejar la imagen de perfil si se proporciona
        if ($request->hasFile('profile_photo')) {

                $path = $request->file('profile_photo')->store('profile_images', 'public');
            $validatedData['profile_photo'] = $path;
        }

        // Actualizar el nombre_usuario de usuario
        if (!empty($validatedData['nombre_usuario'])) {
            $request->usuario->nombre_usuario = $validatedData['nombre_usuario'];
        }

        // Actualizar otros datos del usuario
        $request->usuario->fill($validatedData);

        // Si el email ha cambiado, invalidar la verificación
        if ($request->usuario->isDirty('email')) {
            $request->usuario->email_verified_at = null;
        }

        // Guardar los cambios en la base de datos
        $request->usuario->save();

        // Redirigir con un mensaje de éxito
        return Redirect::route('perfil.mostrar')->with('status', 'success');
    }

    /**
     * Delete the usuario's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('usuarioDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $usuario = Auth::user();

        Auth::logout();

        $usuario->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
