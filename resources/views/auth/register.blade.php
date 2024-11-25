@extends('layouts.appwel')

 @section('content')
     <!-- login -->
     <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Crea una cuenta</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Registrate como nuevo usuario
            </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-2">
                    <div>
                        <label for="name" value="{{ __('Name') }}" class="text-gray-600 mb-2 block">Nombre</label>
                        <input 
                            type="text"
                            name="name" 
                            id="name"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="fulan fulana"
                            required
                            autofocus
                            autocomplete="name"
                        >
                    </div>
                    <div>
                        <label for="email" value="{{ __('Email') }}" class="text-gray-600 mb-2 block">Correo Electronico</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="tuemail.@domain.com"
                            required
                            autocomplete="username"
                        >
                    </div>
                    <div>
                        <label for="password" value="{{ __('Password') }}" class="text-gray-600 mb-2 block">Contraseña</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="*******"
                            autocomplete="new-password"
                        >
                    </div>
                    <div>
                        <label for="confirm" value="{{ __('Confirm Password') }}" class="text-gray-600 mb-2 block">Confirmar contraseña</label>
                        <input type="password" name="confirm" id="confirm"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="*******"
                            required
                            autocomplete="new-password"
                        >
                    </div>
                </div>
                <div class="mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="aggrement" id="aggrement"
                            class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                        <label 
                            for="aggrement" class="text-gray-600 ml-3 cursor-pointer">He leído y acepto los <a
                                href="#" class="text-primary">terminos y condiciones</a>
                        </label>
                    </div>
                </div>
               
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">Crear cuenta
                    </button>
                </div>
            </form>

            <p class="mt-4 text-center text-gray-600">¿Ya tienes cuenta? <a href="{{ route('login') }}"
                    class="text-primary">Inicia Sesión Ahora</a>
            </p>
        </div>
    </div>
    <!-- ./login -->

 @endsection