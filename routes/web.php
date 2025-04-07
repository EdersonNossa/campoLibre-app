<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('login.login_admin');
})->name('admin.dashboard');

Route::resource('eventos', EventoController::class);