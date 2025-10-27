<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Web')</title>
    <link rel="stylesheet" href="{{ asset('/css/gestorLate.css') }}">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-purple px-4">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/imagenes/logo/Logo-Letra-Morada2-removebg-preview.png') }}" alt="Logo" height="85">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item"><a class="nav-link text-dark" href="#">Productos</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">Soluciones</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#">Precios</a></li> -->

            </ul>
            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Iniciar sesión</a>
                <a href="{{ route('singUp') }}" class="btn btn-primary">Empezar ahora</a>
            </div>
        </div>
    </nav>
    {{-- Aquí iría el contenido del resto de tu página --}}
</body>
</html>
