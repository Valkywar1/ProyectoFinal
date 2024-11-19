@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Usuario</h2>

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

    {{-- Formulario para crear un nuevo usuario --}}
    <form id="createUserForm" action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required minlength="3" maxlength="255" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required minlength="6">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required minlength="6">
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</div>

<script>
    // Validación adicional usando JavaScript
    document.getElementById('createUserForm').addEventListener('submit', function(event) {
        let password = document.getElementById('password').value;
        let passwordConfirmation = document.getElementById('password_confirmation').value;

        if (password !== passwordConfirmation) {
            alert('La confirmación de la contraseña no coincide.');
            event.preventDefault(); // Prevenir el envío del formulario si hay un error
        }
    });
</script>
@endsection
