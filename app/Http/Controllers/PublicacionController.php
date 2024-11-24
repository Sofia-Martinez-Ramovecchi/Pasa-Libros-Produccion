<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicacionRequest;
use App\Models\Publicacion;
use Illuminate\Http\Request;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las publicaciones desde la base de datos
        $publicaciones = Publicacion::all();

        return view('dashboard.index', ['publicaciones' => $publicaciones]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicacionRequest $request): \Illuminate\Http\RedirectResponse
    {
        //
        $validated = $request->validated();

        $publicacion = new Publicacion($validated);
        $publicacion->id_estado_publicacion = 1;
        $publicacion->id_libro = 1;
        $publicacion->id_localidad = 1;
        $publicacion->fecha_creacion = $validated['fecha_creacion'];
        $publicacion->descripcion_publicacion = $validated['descripcion_publicacion'];
        $publicacion->save();

        return redirect()->route('publicaciones.index')->with('success', 'Publicación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
