<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <h1>Producto: {{ $product->name }}</h1>
        
        <p></strong> {{ $product->price }}</p>
        <p><strong>Precio:</strong> {{ $product->price }}</p>
        <p><strong>Descripción:</strong> {{ $product->description }}</p>
        
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Volver</a>

    </div>
</body>
</html>