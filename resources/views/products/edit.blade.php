@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto: {{ $product->name }}</h1>

    {{-- Mostrar mensajes de error si hay errores en el formulario --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form id="editProductForm" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required minlength="3" maxlength="255">
        </div>
        
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" required min="0.01" step="0.01">
        </div>
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>

<script>
    // Validación adicional usando JavaScript
    document.getElementById('editProductForm').addEventListener('submit', function(event) {
        let price = document.getElementById('price').value;

        if (price <= 0) {
            alert('El precio debe ser un valor positivo.');
            event.preventDefault(); // Prevenir el envío del formulario si hay un error
        }
    });
</script>
@endsection
