@extends('layouts.panel')
@section('title', 'Añadir proveedores')
@section('contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Agregar nuevo proveedor</h4>
        </div>
        {{-- ✅ Aquí va el mensaje de éxito --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Errores en el formulario:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


             {{-- Formulario --}}
        <div class="card-body formulario">
            <form action="{{ route('proveedores.store') }}" method="POST">
                @csrf

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del proveedor</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>

                {{-- Tipo de proveedor --}}
                <div class="mb-3">
                    <label for="tipo_proveedor" class="form-label">Tipo de proveedor</label>
                    <input type="text" class="form-control" id="tipo_proveedor" name="tipo_proveedor" value="{{ old('tipo_proveedor') }}" required>
                </div>

                {{-- Estado --}}
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" name="estado" id="estado" required>
                        <option disabled value="">Seleccione un estado</option>
                        <option value="Activo" {{ old('estado') == 'Activo' ? 'selected' : '' }}>Activo</option>
                        <option value="Inactivo" {{ old('estado') == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                        <option value="Pendiente" {{ old('estado') == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    </select>
                </div>

                {{-- NIF --}}
                <div class="mb-3">
                    <label for="cif" class="form-label">CIF</label>
                    <input type="text" class="form-control" id="cif" name="cif" value="{{ old('cif') }}" required>
                </div>

                {{-- Teléfono --}}
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                </div>

                {{-- Mail --}}
                <div class="mb-3">
                    <label for="mail" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="mail" name="mail" value="{{ old('mail') }}" required>
                </div>

                {{-- Dirección --}}
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea class="form-control" name="direccion" id="direccion" rows="2">{{ old('direccion') }}</textarea>
                </div>

                {{-- Persona de contacto --}}
                <div class="mb-3">
                    <label for="persona_de_contacto" class="form-label">Persona de contacto</label>
                    <input type="text" class="form-control" id="persona_de_contacto" name="persona_de_contacto" value="{{ old('persona_de_contacto') }}" required>
                </div>

                {{-- Condiciones de pago --}}
                <div class="mb-3">
                    <label for="condiciones_de_pago" class="form-label">Condiciones de pago</label>
                    <input type="text" class="form-control" id="condiciones_de_pago" name="condiciones_de_pago" value="{{ old('condiciones_de_pago') }}" required>
                </div>

                {{-- Notas adicionales --}}
                <div class="mb-3">
                    <label for="notas_adicionales" class="form-label">Notas adicionales</label>
                    <textarea class="form-control" name="notas_adicionales" id="notas_adicionales" rows="2">{{ old('notas_adicionales') }}</textarea>
                </div>

                {{-- Activo --}}
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="1" id="activo" name="activo" {{ old('activo', true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="activo">
                        Proveedor activo
                    </label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Guardar proveedor</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
