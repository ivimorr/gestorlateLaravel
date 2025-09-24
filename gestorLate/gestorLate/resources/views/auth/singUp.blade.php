
@extends('layouts.forms')

@section('formulario')
@push('styles')
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
@endpush

<main class="container-Registro">
    <img src="{{ asset('imagenes/logo/Logo-Letra-Morada2.png') }}" alt="Logo GestorLate" class="logo-img">
    <h2 class="text-center">Crea una cuenta nueva</h2>

    {{-- Mensajes --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="error">
            <strong>Se encontraron errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario --}}

    <form action="{{ route('singUp.post') }}" method="POST" oninput="validarFormulario()">
        @csrf
        <!-- Primera fila -->
        <input type="text" name="name" placeholder="Nombre y apellidos" value="{{ old('name') }}" required>
        <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>

        <!-- Segunda fila -->
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="text" name="telefono" placeholder="Número de teléfono (opcional)" value="{{ old('telefono') }}">

        <!-- Tercera fila -->
        <select name="rol" required>
            <option value="">-- Rol (Cliente por defecto) --</option>
            <option value="cliente" {{ old('rol', 'cliente') == 'cliente' ? 'selected' : '' }}>Cliente</option>
            <option value="empleado" {{ old('rol') == 'empleado' ? 'selected' : '' }}>Empleado</option>
            <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            <select name="tipo_de_negocio" required>
            <option value="">-- Tipo de negocio --</option>
            <option value="bar" {{ old('tipo_de_negocio') == 'bar' ? 'selected' : '' }}>Bar</option>
            <option value="cafeteria" {{ old('tipo_de_negocio') == 'cafeteria' ? 'selected' : '' }}>Cafetería</option>
            <option value="restaurante" {{ old('tipo_de_negocio') == 'restaurante' ? 'selected' : '' }}>Restaurante</option>
            <option value="taberna" {{ old('tipo_de_negocio') == 'taberna' ? 'selected' : '' }}>Taberna</option>
            <option value="otro" {{ old('tipo_de_negocio') == 'otro' ? 'selected' : '' }}>Otro</option>
        </select>

        <!-- Cuarta fila -->
        <input type="text" name="direccion" placeholder="Ubicación (ciudad/pueblo)" value="{{ old('direccion') }}" required>
        <input type="text" name="informacion_adicional" placeholder="¿Dónde oíste hablar de nosotros?" value="{{ old('informacion_adicional') }}">

        <!-- Elementos que ocupan el ancho completo -->
        <label class="checkbox-label">
        <input type="checkbox" name="ofertas" checked>
        Acepto recibir ofertas, consejos y actualizaciones de productos.
        </label>

        <label class="checkbox-label">
        <input type="checkbox" name="condiciones" required>
        Al registrarte, aceptas nuestras <a href="#">Condiciones generales</a> & <a href="#">Política de privacidad</a>.
        </label>

        {{-- CAPTCHA simulado --}}
        <div style="margin-top: 0.5rem;">
        <label class="checkbox-label">
        <input type="checkbox" required>
        No soy un robot
        </label>
        </div>

        <button type="submit" id="botonRegistro" disabled>Crear una cuenta</button>
    </form>

    <p class="text-center" style="margin-top: 1.5rem;">
        ¿Ya tienes una cuenta? <a href="{{route('login')}}">Inicia sesión aquí</a>
    </p>
</main>

@push('scripts')
    <script src="{{ asset('js/auth/registro.js') }}"></script>
@endpush

@endsection