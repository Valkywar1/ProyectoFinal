<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Producto: {{ $product->name }}</h1>
    <p><strong>Precio:</strong> {{ $product->price }}</p>
    <p><strong>Descripción:</strong> {{ $product->description }}</p>
    
    <a href="{{ route('products.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
