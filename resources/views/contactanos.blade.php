@extends('layouts.appwel')

@section('content')
    <!-- Contáctanos -->
    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-3xl uppercase font-medium mb-4 text-center">Contáctanos</h2>
            <p class="text-gray-600 mb-6 text-sm text-center">
                ¿Tienes alguna duda o comentario? ¡Nos encantaría saber de ti!
            </p>
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <div class="space-y-2">
                    <div>
                        <label for="name" class="text-gray-600 mb-2 block">Nombre</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="Tu nombre completo" 
                            required 
                            autofocus
                        >
                    </div>
                    <div>
                        <label for="email" class="text-gray-600 mb-2 block">Correo Electrónico</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="tuemail@dominio.com" 
                            required
                        >
                    </div>
                    <div>
                        <label for="message" class="text-gray-600 mb-2 block">Mensaje</label>
                        <textarea 
                            name="message" 
                            id="message" 
                            rows="4" 
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="Escribe tu mensaje aquí..." 
                            required
                        ></textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        Enviar Mensaje
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- ./Contáctanos -->
@endsection

