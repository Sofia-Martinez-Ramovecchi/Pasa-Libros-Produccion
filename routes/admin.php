<?php


use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;

//usuarios administrador
Route::get('/usuarios', [AdministradorController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [AdministradorController::class, 'create']);
Route::delete('/usuarios/{usuario}', [AdministradorController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/usuarios/{usuario}/edit', [AdministradorController::class, 'edit'])->name('usuarios.edit');
Route::patch('/usuarios/{usuario}', [AdministradorController::class, 'update'])->name('usuarios.update');
Route::post('/usuarios/{usuario}/suspender', [AdministradorController::class, 'suspender'])->name('usuarios.suspender');
Route::get('usuarios/{id}/perfil', [AdministradorController::class, 'verPerfil'])->name('usuarios.verPerfil');

//publicacion rama lea
Route::get('/publicaciones-reportadas', [AdministradorController::class, 'publicacionesReportadas'])->name('publicaciones.reportadas');

Route::get('/publicaciones-mostrar', [AdministradorController::class, 'mostrarPublicaciones'])->name('publicaciones.mostrar');

Route::get('/publicaciones/{publicacion}', [AdministradorController::class, 'verPublicacion'])->name('publicaciones.ver');

Route::post('/publicaciones/{id}/reportar', [AdministradorController::class, 'reportarPublicacion'])->name('publicaciones.reportar');

Route::get('/publicaciones/{id}/reportadas', [AdministradorController::class, 'verPublicacionReportada'])->name('publicacionesreportadas.ver');

Route::delete('/publicaciones/{id}/eliminar', [AdministradorController::class, 'eliminarPublicacion'])->name('publicaciones.eliminar');


