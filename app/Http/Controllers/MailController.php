<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail; // Asegúrate de importar la clase WelcomeMail
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcomeEmail(Request $request)
    {
        // Suponiendo que estás pasando un usuario en la solicitud
        $user = $request->user(); // O puedes obtener el usuario de otra forma

        // Enviamos el correo utilizando WelcomeMail
        Mail::to($user->email)->send(new WelcomeMail($user->name));

        // Opcional: puedes redirigir o devolver una respuesta
        return response()->json(['message' => 'Correo enviado con éxito.']);
    }
}
