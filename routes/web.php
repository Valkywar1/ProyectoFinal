<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; // Asegúrate de tener este controlador importado
use App\Http\Controllers\MailController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\WishlistController;// Ruta de bienvenida pública

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// // Rutas de autenticación (login, register, logout)
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Proteger las rutas con el middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Ruta al dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Route::resource('products', ProductController::class);

    // Pagina de Producto
    Route::get('product', [ProductController::class, 'product'])->name('product');

    // Productos index
    // Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

    // Pagina de wishlist
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    
});

// Pagina de wishlist
// Route::get('/wishlist', [WishlistController::class, 'wishlists'])->name('wishlist');
    
// Pagina de Producto
// Route::get('product', [ProductController::class, 'product'])->name('product');

// Productos index
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');

// Route::get('/products/{id}', [ProductController::class, 'shop'])->name('shop');

// Ruta para enviar un correo electrónico de bienvenida
Route::post('/send-welcome-email', [MailController::class, 'sendWelcomeEmail']);

// Route::get('inicio', [SitioController::class, 'landing'])->name('');

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

// Proteger las rutas de administración con middleware 'auth' e 'isAdmin'
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('users', UserController::class);
});

