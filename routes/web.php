<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('login.login_admin');
})->name('admin.dashboard');

Route::resource('eventos', EventoController::class);

Route::get('/login', [LoginController::class, 'mostrarFormulario'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::resource('eventos', EventoController::class);
});