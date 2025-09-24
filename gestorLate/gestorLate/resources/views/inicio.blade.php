@extends('layouts.panel')

@section('title', 'Inicio')
@push('styles')
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
@endpush
{{-- CSS para las tablas --}}
@push('styles')
    <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">
@endpush

@section('contenido')
<div class="container-fluid py-4">
    <h1 class=" mb-4 titulo-seccion">Bienvenid@, {{ Auth::user()->name }}</h1>

    {{-- KPIs --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card kpi-card kpi-proveedores shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Total Proveedores</h3>
                    <p class="display-6">{{ $totalProveedores }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kpi-card kpi-productos shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Total Productos</h3>
                    <p class="display-6">{{ $totalProductos }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kpi-card kpi-pedidos shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Pedidos de este mes</h3>
                    <p class="display-6">{{ $totalPedidosMes }}</p>
                </div>
            </div>
        </div>
    </div>

   {{-- Accesos rápidos --}}
    <div class="d-flex justify-content-center gap-3 mb-5">
        <a href="{{ route('agregarProveedor') }}" class="btn btn-acceso-proveedor">
            <i class="bi bi-person-plus"></i> Añadir proveedor
        </a>
        <a href="{{ route('productos.agregar') }}" class="btn btn-acceso-producto">
            <i class="bi bi-plus-square"></i> Añadir producto
        </a>
        <a href="{{ route('pedidos.create') }}" class="btn btn-acceso-pedido">
            <i class="bi bi-journal-plus"></i> Nuevo pedido
        </a>
    </div>


    {{-- Panel de navegación principal --}}
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-truck display-4 text-primary mb-2"></i>
                    <h5 class="card-title text-primary">Proveedores</h5>
                    <p class="text-muted">Añade, edita y organiza tus proveedores.</p>
                    <a href="{{ route('proveedores.index') }}" class="btn btn-primary">Ir a Proveedores</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam display-4 text-success mb-2"></i>
                    <h5 class="card-title text-success">Productos</h5>
                    <p class="text-muted">Gestiona los productos disponibles en tu negocio.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-success">Ir a Productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-receipt-cutoff display-4 text-warning mb-2"></i>
                    <h5 class="card-title text-warning">Pedidos</h5>
                    <p class="text-muted">Consulta y organiza tus pedidos realizados.</p>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-warning">Ir a Pedidos</a>
                </div>
            </div>
        </div>
    </div>

   {{-- Últimas facturas --}}
<div class="mb-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-white" >Últimas facturaciones</h5>
            <span class="badge bg-secondary">{{ $ultimasFacturas->count() }} registros</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 text-center align-middle tabla-color-bordes">
                    <thead class="table-light">
                        <tr>
                            <th># Pedido</th>
                            <th>Mesa</th>
                            <th>Productos</th>
                            <th>Subtotal</th>
                            <th>IVA</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ultimasFacturas as $factura)
                            <tr>
                                <td><span class="fw-bold text-primary">#{{ $factura->id }}</span></td>
                                <td>{{ $factura->mesa }}</td>
                                <td>{{ $factura->lineas_pedidos_count }}</td>
                                <td>{{ number_format($factura->subtotal, 2) }} €</td>
                                <td>{{ number_format($factura->iva, 2) }} €</td>
                                <td class="text-success fw-semibold">{{ number_format($factura->total, 2) }} €</td>
                                <td>{{ $factura->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-muted py-4">No hay facturaciones recientes.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stack('scripts')
@endsection

