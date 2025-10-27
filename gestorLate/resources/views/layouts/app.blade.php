<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="186x186" href="{{ asset('imagenes/logo/Logo-taza.png') }}">
    <title>@yield('title','GestorLate')</title>

    {{-- Bootstrap vía CDN (puedes quitar esto si usas Vite) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 {{-- Bootstrap y estilos --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Fuente moderna --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- panel.css personalizado --}}
    {{-- Tu CSS personalizado --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/gestorLate.css') }}">
    {{--Slices with js--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @stack('styles')
</head>
<body>
    <header>
        @include('partials.nav')
    </header>
    
    <main>
        @yield('contenido') {{--aquí se inyectará el contenido especifico--}}
    </main>
    
   <footer class="bg-dark text-light py-5 mt-auto w-100">
    <div class="container">
        <div class="row gy-4">
            <!-- Company Info Section -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h5 class="mb-3 fw-bold text-primary">GestorLate S.L.</h5>
                    <p class="mb-3 text-muted">
                        La solución integral para optimizar la gestión de tu negocio hostelero. 
                        Simplificamos tus procesos para que te enfoques en lo que realmente importa.
                    </p>
                    <div class="company-details">
                        <p class="mb-1 small text-muted">
                            <i class="bi bi-building me-2"></i>
                            NIF: B-12345678
                        </p>
                        <p class="mb-1 small text-muted">
                            <i class="bi bi-geo-alt me-2"></i>
                            Valencia, España
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-section">
                    <h6 class="mb-3 fw-semibold text-white">Navegación</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="{{ route('proveedores.index') }}" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-people me-2"></i>Proveedores
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('productos.index') }}" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-box-seam me-2"></i>Productos
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('pedidos.index') }}" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-clipboard-check me-2"></i>Pedidos
                            </a>
                        </li>
                        <li class="mb-0">
                            <a href="#" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-house me-2"></i>Inicio
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="mb-3 fw-semibold text-white">Contacto</h6>
                    <div class="contact-info">
                        <div class="contact-item mb-2">
                            <i class="bi bi-envelope-fill text-primary me-2"></i>
                            <a href="mailto:info@gestorlate.com" class="text-muted text-decoration-none footer-link">
                                gestorlate@gestorlate.com
                            </a>
                        </div>
                        <div class="contact-item mb-2">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>
                            <a href="tel:+34963123456" class="text-muted text-decoration-none footer-link">
                                +34 963 123 456
                            </a>
                        </div>
                        <div class="contact-item mb-2">
                            <i class="bi bi-whatsapp text-success me-2"></i>
                            <a href="https://wa.me/34963123456" class="text-muted text-decoration-none footer-link" target="_blank">
                                WhatsApp Soporte
                            </a>
                        </div>
                        <div class="contact-item mb-0">
                            <i class="bi bi-clock text-warning me-2"></i>
                            <span class="text-muted small">
                                Lun-Vie: 9:00 - 18:00
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support & Legal -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-section">
                    <h6 class="mb-3 fw-semibold text-white">Soporte y Legal</h6>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-2">
                            <a href="#" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-chat-dots me-2"></i>Soporte Técnico
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-file-text me-2"></i>Términos de Uso
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-shield-lock me-2"></i>Política de Privacidad
                            </a>
                        </li>
                        <li class="mb-0">
                            <a href="#" class="text-muted text-decoration-none footer-link">
                                <i class="bi bi-cookie me-2"></i>Política de Cookies
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Social Media -->
                    <div class="social-links">
                        <h6 class="mb-2 fw-semibold text-white small">Síguenos</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="text-muted footer-social-link" title="Facebook">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="#" class="text-muted footer-social-link" title="Twitter">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                            <a href="#" class="text-muted footer-social-link" title="LinkedIn">
                                <i class="bi bi-linkedin fs-5"></i>
                            </a>
                            <a href="#" class="text-muted footer-social-link" title="Instagram">
                                <i class="bi bi-instagram fs-5"></i>
                            </a>
                            <a href="#" class="text-muted footer-social-link" title="YouTube">
                                <i class="bi bi-youtube fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separator -->
        <hr class="border-secondary my-4">

        <!-- Bottom Section -->
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                    <p class="mb-0 small text-muted">
                        &copy; {{ date('Y') }} GestorLate S.L. - Todos los derechos reservados.
                    </p>
                    <div class="footer-badges d-flex gap-3">
                        <span class="badge bg-success bg-opacity-20 text-success">
                            <i class="bi bi-shield-check me-1"></i>SSL Seguro
                        </span>
                        <span class="badge bg-primary bg-opacity-20 text-primary">
                            <i class="bi bi-award me-1"></i>ISO 27001
                        </span>
                        <span class="badge bg-info bg-opacity-20 text-info">
                            <i class="bi bi-cloud-check me-1"></i>Cloud Ready
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    @yield('scripts') {{--This will run the section from the view  --}}
    {{--For make carousel works--}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>