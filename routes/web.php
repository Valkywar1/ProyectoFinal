<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;

// Ruta de bienvenida pública
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación (login, register, logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Proteger las rutas con el middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('products', ProductController::class);
});

// Proteger las rutas de administración con middleware 'auth' e 'isAdmin'
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('users', UserController::class);
});

// Ruta para enviar un correo electrónico de bienvenida
Route::post('/send-welcome-email', [MailController::class, 'sendWelcomeEmail']);
