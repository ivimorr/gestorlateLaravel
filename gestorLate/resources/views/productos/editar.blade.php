@extends('layouts.panel')
@section('title', $producto->id ? 'Editar producto' : 'Agregar producto')

@section('contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">{{ $producto->id ? 'Editar producto' : 'Agregar nuevo producto' }}</h4>
        </div>

        {{-- Mensajes --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
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
            <form action="{{ $producto->id ? route('productos.update', $producto->id) : route('productos.store') }}" method="POST">
                @csrf
                @if($producto->id)
                    @method('PUT')
                @endif

                {{-- Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
                </div>

                {{-- Descripción --}}
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $producto->descripcion) }}">
                </div>

                {{-- Categoría --}}
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria', $producto->categoria) }}" required>
                </div>
                {{-- Proveedores --}}
                <div class="mb-3">
                    <label for="proveedor_id" class="form-label">Proveedor</label>
                    <select class="form-select" id="proveedor_id" name="proveedor_id" required>
                        <option disabled value="">Seleccione un proveedor</option>
                        @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}"
                                {{ old('proveedor_id', optional($producto->proveedores->first())->id) == $proveedor->id ? 'selected' : '' }}>
                                {{ $proveedor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>


                {{-- Estado del producto --}}
                <div class="mb-3">
                    <label for="estado_producto" class="form-label">Estado</label>
                    <select class="form-select" name="estado_producto" id="estado_producto" required>
                        <option disabled value="">Seleccione un estado</option>
                        <option value="Disponible" {{ old('estado_producto', $producto->estado_producto) == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="Agotado" {{ old('estado_producto', $producto->estado_producto) == 'Agotado' ? 'selected' : '' }}>Agotado</option>
                        <option value="Pendiente" {{ old('estado_producto', $producto->estado_producto) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    </select>
                </div>

                {{-- Unidad de medida --}}
                <div class="mb-3">
                    <label for="unidad_medida" class="form-label">Unidad de medida</label>
                    <input type="text" class="form-control" id="unidad_medida" name="unidad_medida" value="{{ old('unidad_medida', $producto->unidad_medida) }}" required>
                </div>

                {{-- Stock --}}
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" required min="0">
                </div>

                {{-- Precio unitario --}}
                <div class="mb-3">
                    <label for="precio_unitario" class="form-label">Precio unitario (€)</label>
                    <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario', $producto->precio_unitario) }}" step="0.01" required>
                </div>

                {{-- Atributos adicionales --}}
                <div class="mb-3">
                    <label for="atributos_adicionales" class="form-label">Atributos adicionales</label>
                    <input type="text" class="form-control" id="atributos_adicionales" name="atributos_adicionales" value="{{ old('atributos_adicionales', $producto->atributos_adicionales) }}">
                </div>

               
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                   <a href="{{ route('productos.index') }}" class="btn btn-secondary" onclick="confirmarCancelacion(event, this)">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
