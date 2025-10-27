@extends('layouts.panel')

@section('title', 'Editar Pedido')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/agregarProductos.css') }}">
@endpush

@section('contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Editar pedido #{{ $pedido->id }}</h4>
        </div>

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

        <div class="card-body bodyBg">

            <form id="pedidoForm" action="{{ route('pedidos.update', $pedido->id) }}" method="POST" onsubmit="actualizarResumen()">
                @csrf
                @method('PUT')

                {{-- Mesa --}}
                <div class="mb-3">
                    <label for="mesa" class="form-label">Mesa</label>
                    <input type="text" name="mesa" id="mesa" class="form-control" value="{{ old('mesa', $pedido->mesa) }}" required>
                </div>

                {{-- Productos agrupados con acordeón --}}
                @php
                    $agrupados = collect($productos)->groupBy('categoria');
                    $cantidades = collect($pedido->lineasPedidos)->pluck('cantidad', 'producto_id')->toArray();
                    $imagenesCategorias = [
                        'Bebidas' => 'bebidas.jpg',
                        'Alcohol' => 'bebidas.jpg',
                        'Comidas' => 'comidas.jpg',
                        'Postres' => 'postres.jpg',
                        'Platos principales' => 'plato-principal.jpg',
                        'Tapas' => 'tapas.jpg',
                        'Cafés e infusiones' => 'cafe.jpg',
                        'Desayunos' => 'cafe.jpg',
                        'Menú del día' => 'menu-dia.jpg',

                    ];
                @endphp

                <h5 class="mb-3 seccion-titulo">Productos</h5>

                <div class="accordion" id="accordionCategorias">
                    @foreach($agrupados as $categoria => $grupo)
                        @php
                            $categoriaId = Str::slug($categoria, '-');
                        @endphp

                        <div class="accordion-item bg-transparent text-white border border-secondary mb-2">
                            <h2 class="accordion-header" id="heading-{{ $categoriaId }}">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $categoriaId }}"
                                        aria-expanded="false"
                                        aria-controls="collapse-{{ $categoriaId }}">
                                    {{ $categoria }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $categoriaId }}" class="accordion-collapse collapse"
                                aria-labelledby="heading-{{ $categoriaId }}"
                                data-bs-parent="#accordionCategorias">
                                <div class="accordion-body">

                                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                                        @foreach($grupo as $producto)
                                            @php
                                                $cantidadActual = $cantidades[$producto->id] ?? 0;
                                                $nombreImagen = $imagenesCategorias[$categoria] ?? 'default.png';
                                                $imagenCategoria = asset("imagenes/categorias/{$nombreImagen}");
                                            @endphp

                                            <div class="col">
                                                <div class="card h-100 shadow-sm card-producto {{ $producto->stock == 0 ? 'sin-stock' : '' }}">
                                                    <img src="{{ $imagenCategoria }}" alt="{{ $categoria }}" class="card-img-top img-categoria">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="color:black">{{ $producto->nombre }}</h5>
                                                        <p class="card-text text-muted">{{ $producto->descripcion }}</p>
                                                        <p class="fw-semibold" style="color:black">Precio: {{ number_format($producto->precio_unitario, 2) }} €</p>

                                                        @if($producto->stock > 0)
                                                            <div class="d-flex align-items-center mt-3">
                                                                <button type="button" class="btn btn-outline-danger btn-sm me-2" onclick="cambiarCantidad({{ $producto->id }}, -1)">−</button>
                                                                <span id="cantidad-{{ $producto->id }}" style="color:black">{{ $cantidadActual }}</span>
                                                                <button type="button" class="btn btn-outline-success btn-sm ms-2" onclick="cambiarCantidad({{ $producto->id }}, 1)">+</button>
                                                            </div>
                                                        @else
                                                            <div class="mt-3 text-danger fw-bold">
                                                                Sin stock
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Resumen --}}
                <h4 class="mb-3">Resumen del pedido</h4>
                <ul id="resumen-lista" class="list-group mb-3"></ul>

                <div class="d-flex justify-content-between">
                    <span>Subtotal:</span>
                    <span id="subtotal">0.00 €</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>IVA (21%):</span>
                    <span id="iva">0.00 €</span>
                </div>
                <div class="d-flex justify-content-between fw-bold">
                    <span>Total:</span>
                    <span id="total">0.00 €</span>
                </div>

                <input type="hidden" name="pedido_json" id="pedido_json">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary me-2 cancelar-btn" onclick="confirmarCancelacion(event, this)">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.productosDesdeBlade = @json($productos);
        window.lineasPedidoDesdeBlade = @json($pedido->lineasPedidos);
    </script>
    <script src="{{ asset('js/alertas.js') }}"></script>
    <script src="{{ asset('js/pedidos/edit.js') }}"></script>
@endpush
@endsection
