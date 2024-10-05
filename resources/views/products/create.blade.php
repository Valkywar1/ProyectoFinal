<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Producto</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        @error('name')
            <i>{{ $message }} </i>
        @enderror
        
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>

        @error('price')
            <i>{{ $message }} </i>
        @enderror
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        
        @error('description')
            <i>{{ $message }} </i>
        @enderror
        
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
