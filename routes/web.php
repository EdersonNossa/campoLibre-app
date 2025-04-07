<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\NotificacionController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);
Route::resource('notificaciones', NotificacionController::class);

