<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SitioController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de usuarios
Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Ruta al dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Pagina de shop

    // Pagina de wishlist

    //

});

Route::get('inicio', [SitioController::class, 'landing']);