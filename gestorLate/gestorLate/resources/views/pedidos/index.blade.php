@extends('layouts.panel')

@section('title', 'Pedidos')

{{-- CSS para las tablas --}}
@push('styles')
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
@endpush
@section('contenido')
<div class="container container-ancho mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
            <i class="bi-receipt-cutoff text-white" style="font-size: 2.5rem; margin-right: 0.9rem;"></i>
            <h3 class="mb-0 titulo-seccion">Lista de pedidos</h3>
        </div>
        {{-- Botón para agregar pedido --}}
        <a href="{{ route('pedidos.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Agregar pedido
        </a>
    </div>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    @endif

    {{-- Tabla de pedidos --}}
    <div class="card shadow">
        <div class="card-body">
            @if($pedidos->count())
                <div class="table-responsive">
                    <table class="table table-hover align-middle tabla-color-bordes">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Mesa</th>
                                <th>Nº de Productos</th>
                                <th>Subtotal</th>
                                <th>IVA</th>
                                <th>Total</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
                                    <td><span class="fw-bold text-primary">#{{ $pedido->id }}</span></td>
                                    <td>{{ $pedido->mesa ?? '—' }}</td>
                                    <td>{{ $pedido->lineasPedidos->count() }}</td>
                                    <td>{{ number_format($pedido->subtotal, 2) }} €</td>
                                    <td>{{ number_format($pedido->iva, 2) }} €</td>
                                    <td class="text-success fw-semibold">{{ number_format($pedido->total, 2) }} €</td>
                                    <td>{{ $pedido->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-eye"></i> Ver
                                        </a>
                                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline form-eliminar">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i> Borrar
                                            </button>
                                        </form>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">No hay pedidos registrados aún.</p>
            @endif
        </div>
    </div>
</div>
@endsection
