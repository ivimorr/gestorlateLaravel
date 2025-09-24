@extends('layouts.panel')
@section('title', 'Productos')
@push('styles')
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
@endpush
@section('contenido')
<div class="container container-ancho mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-box-seam text-white" style="font-size: 2.5rem; margin-right: 0.9rem;"></i>
            <h3 class="mb-0 titulo-seccion">Lista de productos</h3>
        </div>
        <a href="{{ route('productos.agregar') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Agregar producto
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            @if($productos->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle tabla-color-bordes">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Proveedor</th>
                                <th>Estado</th>
                                <th>Unidad</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Atributos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->descripcion ?? '—' }}</td>
                                    <td>{{ $producto->categoria }}</td>
                                    <td>
                                        @if($producto->proveedores->isNotEmpty())
                                            {{ $producto->proveedores->pluck('nombre')->join(', ') }}
                                        @else
                                            <span class="text-muted">Sin proveedor</span>
                                        @endif
                                    </td>

                                    <td>
                                        @php
                                            $estado = strtolower($producto->estado_producto);
                                            $claseBadge = match($estado) {
                                                'disponible' => 'bg-success',
                                                'agotado' => 'bg-danger',
                                                'en espera' => 'bg-secondary',
                                                default => 'bg-light text-dark',
                                            };
                                        @endphp
                                        <span class="badge {{ $claseBadge }}">
                                            {{ ucfirst($estado) }}
                                        </span>
                                    </td>
                                    <td>{{ $producto->unidad_medida }}</td>
                                    <td>{{ $producto->stock }}</td>
                                    <td>{{ number_format($producto->precio_unitario, 2) }} €</td>
                                    <td>{{ $producto->atributos_adicionales }}</td>
                                    <td>
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline form-eliminar">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Borrar
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">No hay productos registrados aún.</p>
            @endif
        </div>
    </div>
</div>
@endsection
