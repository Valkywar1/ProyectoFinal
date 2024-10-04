<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de usuarios
Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);