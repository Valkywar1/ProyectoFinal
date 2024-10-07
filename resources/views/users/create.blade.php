<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Nuevo Usuario</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name">
            </div>

            @error('name')
                <i>{{ $message }} </i>
            @enderror

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" >
            </div>

            @error('email')
                <i>{{ $message }} </i>
            @enderror

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password" >
            </div>

            @error('password')
                <i>{{ $message }} </i>
            @enderror


            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirma Contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" id="password_confirmation" >
            </div>

            @error('password_confirmation')
                <i>{{ $message }} </i>
            @enderror

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
