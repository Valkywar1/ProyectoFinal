@extends('layouts.app')

 @section('content')
    
    <!-- Página de Contáctanos -->
    <div class="col-span-3">
        <div class="flex items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Contáctanos</h2>
        </div>

        <div class="bg-white shadow rounded overflow-hidden p-6">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Nombre</label>
                        <input type="text" name="name" id="name" required
                            class="w-full py-2 px-3 border border-gray-300 rounded focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Correo Electrónico</label>
                        <input type="email" name="email" id="email" required
                            class="w-full py-2 px-3 border border-gray-300 rounded focus:ring-primary focus:border-primary">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="message" class="block text-sm font-medium text-gray-600">Mensaje</label>
                    <textarea name="message" id="message" rows="4" required
                        class="w-full py-2 px-3 border border-gray-300 rounded focus:ring-primary focus:border-primary"></textarea>
                </div>

                <div class="mt-6 text-right">
                    <button type="submit"
                        class="py-2 px-6 bg-primary text-white rounded hover:bg-gray-800 transition">
                        Enviar Mensaje
                    </button>
                </div>
            </form>
        </div>
    </div>


    
 @endsection
