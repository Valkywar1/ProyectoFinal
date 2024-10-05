<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto: {{ $product->name }}</h1>
    
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        
        @error('name')
            <i>{{ $message }} </i>
        @enderror

        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        @error('price')
            <i>{{ $message }} </i>
        @enderror
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>

        @error('description')
            <i>{{ $message }} </i>
        @enderror
        
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
