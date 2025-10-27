@extends('layouts.panel')

@section('title', 'Inicio')
{{-- CSS para las tablas --}}
@push('styles')
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
@endpush
@section('contenido')
<div class="container  container-ancho mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-truck text-white" style="font-size: 2.5rem; margin-right: 0.9rem;"></i>
            <h3 class="mb-0 text-white">Lista de proveedores</h3>
        </div>
        <a href="{{ route('proveedores.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Agregar proveedor
        </a>
    </div>

    {{-- Success messages --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

    {{--Supplier table --}} 
    <div class="card shadow">
        <div class="card-body">
            @if($proveedores->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle tabla-color-bordes">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>CIF</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proveedores as $proveedor)
                                <tr>
                                    <td>{{ $proveedor->nombre }}</td>
                                    <td>{{ $proveedor->tipo_proveedor }}</td>
                                    <td>{{ $proveedor->estado }}</td>
                                    <td>{{ $proveedor->cif }}</td>
                                    <td>{{ $proveedor->mail }}</td>
                                    <td>{{ $proveedor->telefono ?? '—' }}</td>
                                    <td>
                                        @php
                                            $estado = strtolower($proveedor->estado); // Make sure it is in lowercase for comparisons
                                        @endphp

                                        <span class="badge 
                                            {{ $estado === 'activo' ? 'bg-success' : 
                                            ($estado === 'pendiente' ? 'bg-warning text-dark' : 'bg-secondary') }}">
                                            {{ ucfirst($estado) }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>

                                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" class="d-inline form-eliminar">
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
                <p class="text-muted">No hay proveedores registrados aún.</p>
            @endif
        </div>
    </div>
</div>
@endsection
 @stack('scripts')