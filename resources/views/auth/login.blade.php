@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="wrapper bg-white">
    <div class="h2 text-center">Creativity</div>
    <div class="h4 text-muted text-center pt-2">Ingrese sus datos de inicio de sesión</div>
    <form class="pt-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group py-2">
            <div class="input-field"> 
                <span class="far fa-user p-2"></span>
                <input type="text" name="email" placeholder="Correo Electrónico" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field"> 
                <span class="fas fa-lock p-2"></span>
                <input type="password" name="password" placeholder="Ingrese su Contraseña" required class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <button type="button" class="btn bg-white text-muted"><span class="far fa-eye-slash"></span></button>
            </div>
        </div>
        <div class="d-flex align-items-start">
            <div class="remember"> 
                <label class="option text-muted"> 
                    Recordarme 
                    <input type="checkbox" name="remember"> 
                    <span class="checkmark"></span> 
                </label> 
            </div>
            <div class="ml-auto"> <a href="#" id="forgot">¿Olvidaste tu contraseña?</a> </div>
        </div> 
        <button type="submit" class="btn btn-block text-center my-3">Iniciar sesión</button>
        <div class="text-center pt-3 text-muted">¿No eres miembro? <a href="#">Regístrate</a></div>
    </form>
</div>
@endsection
