@extends('layouts.appwel')

 @section('content')
    <!-- login -->
    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Iniciar</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Bienvenido de nuevo
            </p>

            {{-- Mostrar mensajes de estado --}}
            @session('status')
                <div>
                    {{ $value }}
                </div>
            @endsession
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-2">
                    <div>
                        <label for="email" value="{{ __('Email') }}" class="text-gray-600 mb-2 block" >Email address</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="tuemail.@domain.com"
                            required 
                            autofocus
                            autocomplete="username"
                        >
                    </div>
                    <div>
                        <label for="password" value="{{ __('Password') }}" class="text-gray-600 mb-2 block">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400"
                            placeholder="*******"
                            required
                        >
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember"
                            class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                        >
                        <label for="remember" class="text-gray-600 ml-3 cursor-pointer">{{ __('Recuerdame') }}</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="text-primary" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">Iniciar</button>
                </div>
            </form>


            <p class="mt-4 text-center text-gray-600">No tienes cuenta? <a href="{{ route('register') }}"
                    class="text-primary">Registrate ahora</a></p>
        </div>
    </div>
    <!-- ./login -->

 @endsection