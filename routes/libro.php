<?php


use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/publicacioness', [UsuarioController::class, 'index'])->name('publicaciones.index');

Route::get('/usuario/publicaciones', [UsuarioController::class, 'mostrarPublicacionesUsuarios'])->name('usuario.publicaciones');


Route::middleware(['auth'])->get('/solicitudes-intercambio', [UsuarioController::class, 'solicitudesIntercambio'])->name('solicitudes.index');
