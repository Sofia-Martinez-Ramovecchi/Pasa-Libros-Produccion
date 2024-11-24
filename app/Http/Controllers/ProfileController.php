<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display the usuario's profile form.
     */
    public function mostrar(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
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
        $validatedData = $request->validated();

        $usuario = Auth::user();
        $debugMessages = [];

        // Mensaje de depuración
        $debugMessages[] = 'Datos validados: ' . json_encode($validatedData);

        // Solo actualizar la contraseña si se proporciona
        if (!empty($validatedData['password'])) {
            $usuario->password = bcrypt($validatedData['password']);
            $debugMessages[] = 'Contraseña actualizada.';
        }

        // Manejar la imagen de perfil si se proporciona
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_images', 'public');
            $usuario->profile_photo = $path;
            $debugMessages[] = 'Imagen de perfil actualizada: ' . $path;
        }

        // Actualizar el nombre de usuario si se proporciona
        if (!empty($validatedData['nombre_usuario'])) {
            $usuario->nombre_usuario = $validatedData['nombre_usuario'];
            $debugMessages[] = 'Nombre de usuario actualizado: ' . $validatedData['nombre_usuario'];
        }

        // Actualizar el email si se proporciona
        if (!empty($validatedData['email'])) {
            $usuario->email = $validatedData['email'];
            $debugMessages[] = 'Email actualizado: ' . $validatedData['email'];
        }

        // Guardar los cambios en la base de datos
        $usuario->save();
        $debugMessages[] = 'Usuario guardado en la base de datos.';

        // Redirigir con un mensaje de éxito y depuración
        return Redirect::route('perfil.mostrar')->with('status', 'success')->with('debug', $debugMessages);
    }
    /**
     * Delete the usuario's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('usuarioDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $usuario = $request->user();

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
