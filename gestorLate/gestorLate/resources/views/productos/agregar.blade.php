@extends('layouts.panel')
@section('title', 'Agregar producto')

@section('contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Agregar nuevo producto</h4>
        </div>

        {{-- Mensaje de éxito --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        {{-- Errores de validación --}}
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
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                </div>

                {{-- Descripción --}}
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                </div>

                {{-- Categoría --}}
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <select class="form-select" name="categoria" id="categoria" required>
                        <option disabled selected value="">Seleccione una categoría</option>
                        <option value="Bebidas" {{ old('categoria') == 'Bebidas' ? 'selected' : '' }}>Bebidas</option>
                        <option value="Entrantes" {{ old('categoria') == 'Entrantes' ? 'selected' : '' }}>Entrantes</option>
                        <option value="Platos principales" {{ old('categoria') == 'Platos principales' ? 'selected' : '' }}>Platos principales</option>
                        <option value="Postres" {{ old('categoria') == 'Postres' ? 'selected' : '' }}>Postres</option>
                        <option value="Tapas" {{ old('categoria') == 'Tapas' ? 'selected' : '' }}>Tapas</option>
                        <option value="Cafés e infusiones" {{ old('categoria') == 'Cafés e infusiones' ? 'selected' : '' }}>Cafés e infusiones</option>
                        <option value="Desayunos" {{ old('categoria') == 'Desayunos' ? 'selected' : '' }}>Desayunos</option>
                    </select>
                </div>
                {{-- Proveedor --}}
                <div class="mb-3">
                    <label for="proveedor_id" class="form-label">Proveedor</label>
                    <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                        <option value="" disabled selected>Seleccione un proveedor</option>
                        @foreach($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}" {{ old('proveedor_id') == $proveedor->id ? 'selected' : '' }}>
                                {{ $proveedor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>


                {{-- Estado del producto --}}
                <div class="mb-3">
                    <label for="estado_producto" class="form-label">Estado</label>
                    <select class="form-select" name="estado_producto" id="estado_producto" required>
                        <option disabled selected value="">Seleccione un estado</option>
                        <option value="Disponible" {{ old('estado_producto') == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="Agotado" {{ old('estado_producto') == 'Agotado' ? 'selected' : '' }}>Agotado</option>
                        <option value="Pendiente" {{ old('estado_producto') == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    </select>
                </div>

                {{-- Unidad de medida --}}
                <div class="mb-3">
                    <label for="unidad_medida" class="form-label">Unidad de medida</label>
                    <input type="text" class="form-control" id="unidad_medida" name="unidad_medida" value="{{ old('unidad_medida') }}" required>
                </div>

                {{-- Stock --}}
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', 0) }}" required min="0">
                </div>

                {{-- Precio unitario --}}
                <div class="mb-3">
                    <label for="precio_unitario" class="form-label">Precio unitario (€)</label>
                    <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario') }}" step="0.01" required>
                </div>

                {{-- Atributos adicionales --}}
                <div class="mb-3">
                    <label for="atributos_adicionales" class="form-label">Atributos adicionales</label>
                    <input type="text" class="form-control" id="atributos_adicionales" name="atributos_adicionales" value="{{ old('atributos_adicionales') }}">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Guardar producto</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
