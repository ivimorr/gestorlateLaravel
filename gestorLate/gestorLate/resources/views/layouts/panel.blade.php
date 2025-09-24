<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="186x186" href="{{ asset('imagenes/logo/Logo-taza.png') }}">
    <title>@yield('title', 'Panel de gestión')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap y estilos --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Fuente moderna --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- panel.css personalizado --}}
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    {{-- Estilos por página --}}
    @stack('styles')
</head>

<body class="d-flex flex-column">
    {{-- Navbar --}}
    @include('partials.nav-panel')


    {{-- Contenido principal --}}
    <div class="main-content container-fluid py-4 flex-grow-1">
        @yield('contenido')
    </div>
    </div>


    {{-- Footer --}}
    <div>
        @include('partials.footer')
    </div>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tu script personalizado -->
    <script src="{{ asset('js/alertas.js') }}"></script>
    @stack('scripts')
    @stack('styles')

</body>

</html>
