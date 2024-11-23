<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\WishlistController;

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

    // Productos index
    Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

    // Pagina de wishlist
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    
    // Pagina de Producto
    Route::get('product', [ProductController::class, 'product'])->name('product');
});

Route::get('inicio', [SitioController::class, 'landing']);

// Vista para Contactanos
Route::get('/contactanos', function() {
    return view('contactanos');
})->name('contactanos');

// Vista para Acerca de nosotros
Route::get('/acerca', function() {
    return view('acerca');
})->name('acerca');

// Ruta para manejar el formulario de contacto
Route::post('/contactanos', function (\Illuminate\Http\Request $request) {
    // Aquí puedes manejar el formulario, por ejemplo, enviar un correo o guardar en la base de datos
    return back()->with('success', '¡Mensaje enviado correctamente!');
})->name('contact.submit');