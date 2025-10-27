<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="186x186" href="{{ asset('imagenes/logo/Logo-taza.png') }}">
    

    <title>@yield('title','formulario de resgistro')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"><!--Para poder utilizar css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}"></script>
    

</head>
<body>
    <header>
        
    </header>

    <main>
        @yield('formulario') <!--aquí se inyectará el formulario especifico-->
    </main>
    <!-- <footer>
        <p>&copy; {{ date('Y') }} - GestorLate S.L.</p>
    </footer> -->
</body>
</html>
@stack('styles')
@stack('scripts')
