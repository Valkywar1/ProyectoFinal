<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de usuarios
Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);



// En tu archivo de rutas (por ejemplo, web.php)
Route::post('/send-welcome-email', [MailController::class, 'sendWelcomeEmail']);

