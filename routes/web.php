<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EstadisticaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);
Route::resource('notificaciones', NotificacionController::class);
Route::resource('perfil', PerfilController::class);
Route::resource('estadistica', EstadisticaController::class);
Route::get('home', function () {
    return view('cerrarSesion');
});



