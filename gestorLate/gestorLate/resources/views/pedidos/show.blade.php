@extends('layouts.panel')

@section('title', 'Detalle del Pedido')

@section('contenido')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Pedido #{{ $pedido->id }}</h4>
            <span class="badge bg-secondary">Mesa: {{ $pedido->mesa ?? '—' }}</span>
        </div>

        <div class="card-body">
            {{-- Datos generales del pedido --}}
            <p><strong>Estado:</strong> {{ $pedido->estado ?? '—' }}</p>
            <p><strong>Fecha de creación:</strong> {{ $pedido->created_at->format('d/m/Y H:i') }}</p>

            {{-- Tabla de productos --}}
            <h5 class="mt-4">Productos del pedido</h5>
            @if($pedido->lineasPedidos->count())
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Producto</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedido->lineasPedidos as $linea)
                                <tr>
                                    <td>{{ $linea->producto->nombre }}</td>
                                    <td>{{ $linea->producto->descripcion ?? '—' }}</td>
                                    <td>{{ $linea->cantidad }}</td>
                                    <td>{{ number_format($linea->precio_unitario, 2) }} €</td>
                                    <td>{{ number_format($linea->subtotal, 2) }} €</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">No hay productos en este pedido.</p>
            @endif

            {{-- Totales --}}
            <div class="mt-4">
                <p><strong>Subtotal:</strong> {{ number_format($pedido->subtotal, 2) }} €</p>
                <p><strong>IVA:</strong> {{ number_format($pedido->iva, 2) }} €</p>
                <p class="fw-bold fs-5 text-success"><strong>Total:</strong> {{ number_format($pedido->total, 2) }} €</p>
            </div>

            {{-- Botones --}}
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary me-2">
                    <i class="bi bi-pencil"></i> Editar
                </a>

                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline form-eliminar">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="bi bi-trash"></i> Borrar
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

