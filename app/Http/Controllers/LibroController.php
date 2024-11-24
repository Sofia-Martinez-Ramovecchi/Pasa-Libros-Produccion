<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibroRequest;
use App\Http\Requests\StorePublicacionRequest;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
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
    public function store(LibroRequest $request): \Illuminate\Http\RedirectResponse
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
}
