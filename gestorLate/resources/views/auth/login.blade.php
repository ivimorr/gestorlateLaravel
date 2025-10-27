@extends('layouts.forms')

@push('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/auth/login.js') }}"></script>
@endpush
@section('formulario')
<main class="d-flex flex-column justify-content-center align-items-center vh-100">
    
    <!-- Logo arriba del contenedor -->
    
    <div class="login-container p-4 shadow">
        <img src="{{ asset('imagenes/logo/Logo-Letra-Morada2-removebg-preview.png') }}" alt="Logo GestorLate" class="logo-login ">
        <h4 class="text-center mb-4 text-center">INICIAR SESIÓN</h4>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-muted">Email</label>
                <div class="input-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="ejemplo@email.com" value="{{ old('email') }}" required>
                    <span class="input-group-text bg-white border-start-0"><i class="fa fa-envelope text-muted"></i></span>
                </div>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label for="password" class="form-label text-muted">Contraseña</label>
                    <a href="#" class="small text-decoration-none" style="color:#793ccf;">¿Has olvidado la contraseña?</a>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" required>
                    <span class="input-group-text bg-white border-start-0" id="togglePassword"><i class="fa fa-eye text-muted"></i></span>
                </div>
                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Botón Login -->
            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-login">LOGIN</button>
            </div>

            <!-- Registro -->
            <p class="text-center small text-muted">¿Eres nuevo aquí? Ve a <a href="{{ route('singUp') }}" style="color:#793ccf;">Registro</a></p>

            {{-- Google Login (Lo implemetaremso como mejora mas a delante)--}}
           {{-- <div class="text-center mt-3">
                <button type="button" class="btn btn-outline-secondary w-100">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" style="width:20px; margin-right:10px;">
                    Iniciar sesión con Google
                </button>
            </div>--}}
        </form>
    </div>
</main>
@endsection
