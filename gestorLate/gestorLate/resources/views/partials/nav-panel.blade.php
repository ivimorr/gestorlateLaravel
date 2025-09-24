<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3 shadow-sm sticky-top custom-navbar">
    <div class="container-fluid">
        
        <a href="javascript:history.back()" class="text-white me-3 fs-4 d-flex align-items-center back-button back-link">
            <i class="bi bi-chevron-left"></i>
        </a>
        <a class="navbar-brand d-flex align-items-center me-5" href="{{ route('inicio') }}">
            <img src="{{ asset('imagenes/logo/Logo-taza.png') }}" alt="Logo GestorLate" class="logo-navbar me-2">
            <span class="fw-bold text-white">GestorLate</span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active text-morado fw-bold' : '' }}"
                       href="{{ route('inicio') }}">
                        <i class="bi bi-house-door me-1"></i> Inicio
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ request()->routeIs('proveedores.*') ? 'active text-morado fw-bold' : '' }}"
                       href="{{ route('proveedores.index') }}">
                        <i class="bi bi-truck me-1"></i> Proveedores
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ request()->routeIs('productos.*') ? 'active text-morado fw-bold' : '' }}"
                       href="{{ route('productos.index') }}">
                        <i class="bi bi-box-seam me-1"></i> Productos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pedidos.*') ? 'active text-morado fw-bold' : '' }}"
                       href="{{ route('pedidos.index') }}">
                        <i class="bi bi-receipt-cutoff me-1"></i> Pedidos
                    </a>
                </li>
            </ul>
            {{--Collapse for the button of Log Out--}}
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-secondary" href="#" role="button"
                    id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-5"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item m-0 p-0">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-1"></i> Cerrar sesión</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

