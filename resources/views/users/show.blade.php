<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Usuario</h1>

        <div class="mb-3">
            <strong>ID:</strong> {{ $user->id }}
        </div>
        <div class="mb-3">
            <strong>Nombre:</strong> {{ $user->name }}
        </div>
        <div class="mb-3">
            <strong>Email:</strong> {{ $user->email }}
        </div>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>
