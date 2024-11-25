@extends('layouts.appwel')

 @section('content')
    <!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('{{ asset('backend/assets/images/banner.jpg')}}');">
        <div class="container">
            <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                Creaciones Únicas <br> Todo Artesanal
            </h1>
            <p>Descubre el arte detrás de cada pieza, elaborada con pasión <br>
                y dedicación por manos expertas. Lleva autenticidad a tu hogar.</p>
            <div class="mt-12">
                <a href="{{ route('shop') }}" class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary">Comprar Ahora</a>
            </div>
        </div>
    </div>
    <!-- ./banner -->

    <!-- features -->
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{ asset('backend/assets/images/icons/delivery-van.svg') }}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Envio Gratuito</h4>
                    <p class="text-gray-500 text-sm">En compras mayores a $200</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{ asset('backend/assets/images/icons/money-back.svg') }}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Garantía de Devolución</h4>
                    <p class="text-gray-500 text-sm">30 días para cambios o devoluciones</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="{{ asset('backend/assets/images/icons/service-hours.svg') }}" alt="Delivery" class="w-12 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Atención Personalizada</h4>
                    <p class="text-gray-500 text-sm">Estamos para ayudarte</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ./features -->

    <!-- ads -->
    <div class="container pb-16">
        <a href="{{ route('shop') }}">
            <img src="{{ asset('backend/assets/images/offer1.jpg') }}" alt="ads" class="w-full">
        </a>
    </div>
    <!-- ./ads -->

 @endsection
