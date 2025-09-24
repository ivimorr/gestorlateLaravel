@extends('layouts.panel')
@section('contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-black text-white">
            <h4 class="mb-0">Editar proveedor</h4>
        </div>

        {{--Alertas --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger m-3">
                <strong>Errores en el formulario:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{--Formulario --}}
        <div class="card-body formulario">
            <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del proveedor</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proveedor->nombre) }}" required>
                </div>

                {{-- Tipo de proveedor --}}
                <div class="mb-3">
                    <label for="tipo_proveedor" class="form-label">Tipo de proveedor</label>
                    <input type="text" class="form-control" id="tipo_proveedor" name="tipo_proveedor" value="{{ old('tipo_proveedor', $proveedor->tipo_proveedor) }}" required>
                </div>

                {{-- Estado --}}
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" name="estado" id="estado" required>
                        <option disabled value="">Seleccione un estado</option>
                        <option value="Activo" {{ old('estado', $proveedor->estado) == 'Activo' ? 'selected' : '' }}>Activo</option>
                        <option value="Inactivo" {{ old('estado', $proveedor->estado) == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                        <option value="Pendiente" {{ old('estado', $proveedor->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    </select>
                </div>

                {{--CIF--}}
                <div class="mb-3">
                    <label for="cif" class="form-label">CIF</label>
                    <input type="text" class="form-control" id="cif" name="cif" value="{{ old('cif', $proveedor->cif) }}" required>
                </div>

                {{-- Teléfono --}}
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $proveedor->telefono) }}">
                </div>

                {{-- Mail --}}
                <div class="mb-3">
                    <label for="mail" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="mail" name="mail" value="{{ old('mail', $proveedor->mail) }}" required>
                </div>

                {{-- Dirección --}}
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <textarea class="form-control" name="direccion" id="direccion" rows="2">{{ old('direccion', $proveedor->direccion) }}</textarea>
                </div>

                {{-- Persona de contacto --}}
                <div class="mb-3">
                    <label for="persona_de_contacto" class="form-label">Persona de contacto</label>
                    <input type="text" class="form-control" id="persona_de_contacto" name="persona_de_contacto" value="{{ old('persona_de_contacto', $proveedor->persona_de_contacto) }}" required>
                </div>

                {{-- Condiciones de pago --}}
                <div class="mb-3">
                    <label for="condiciones_de_pago" class="form-label">Condiciones de pago</label>
                    <input type="text" class="form-control" id="condiciones_de_pago" name="condiciones_de_pago" value="{{ old('condiciones_de_pago', $proveedor->condiciones_de_pago) }}" required>
                </div>

                {{-- Notas adicionales --}}
                <div class="mb-3">
                    <label for="notas_adicionales" class="form-label">Notas adicionales</label>
                    <textarea class="form-control" name="notas_adicionales" id="notas_adicionales" rows="2">{{ old('notas_adicionales', $proveedor->notas_adicionales) }}</textarea>
                </div>

                {{-- Activo --}}
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="1" id="activo" name="activo" {{ old('activo', $proveedor->activo) ? 'checked' : '' }}>
                    <label class="form-check-label" for="activo">
                        Proveedor activo
                    </label>
                </div>

                {{-- Botones --}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary me-2" onclick="confirmarCancelacion(event, this)">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
