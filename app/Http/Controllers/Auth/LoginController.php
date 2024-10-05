<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que la vista se llame 'auth.login'
    }

    // Maneja la autenticación del usuario
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir a la página de inicio
            return redirect()->intended('home'); // Cambia 'home' por la ruta que desees
        }

        // Si la autenticación falla, redirigir de nuevo con un mensaje de error
        return redirect()->back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    // Otras funciones relacionadas con la autenticación (como logout) pueden ser agregadas aquí
}
