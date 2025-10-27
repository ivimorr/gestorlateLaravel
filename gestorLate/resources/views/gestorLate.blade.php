

@extends('layouts.app')

@section('title', 'GestorLate - Simplifica la gestión de tu bar')
@section('contenido')
    <div class="container-fluid px-0">
 <!-- Hero Section -->
        <section class="hero-section bg-gradient py-5 position-relative overflow-hidden">
            <div class="container">
                <div class="row align-items-center min-vh-50">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="hero-content">
                            <h1 class="display-2 fw-bold text-primary mb-4 animate-fade-in">
                                Simplifica la gestión de tu bar
                            </h1>
                            <p class="lead text-muted mb-4 animate-fade-in-delay">
                                El software todo en uno que necesitas para hacer que tu trabajo sea mucho más sencillo
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-logo-container position-relative d-flex justify-content-center align-items-center" style="min-height: 400px;">
                            
                            <!-- Main logo with pulsing animation -->
                            <div class="main-logo-wrapper position-relative animate-logo-entrance">
                                <img src="{{ asset('/imagenes/logo/Logo-letra-morada.png') }}" 
                                    alt="GestorLate Logo" 
                                    class="main-logo img-fluid animate-pulse-gentle"
                                    style="max-width: 450px; filter: drop-shadow(0 10px 30px rgba(0,0,0,0.2));">
                                
                                <!-- Glowing effect behind logo -->
                                <div class="logo-glow position-absolute top-50 start-50 translate-middle animate-glow"
                                    style="width: 500px; height: 500px; background: radial-gradient(circle, rgba(138, 43, 226, 0.1) 0%, transparent 70%); border-radius: 50%; z-index: -1;"></div>
                            </div>

                            <!-- Floating geometric shapes -->
                            <div class="floating-shapes">
                                <!-- Triangle -->
                                <div class="floating-shape triangle position-absolute animate-float-1"
                                    style="top: 15%; left: 10%; width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 25px solid rgba(138, 43, 226, 0.3);"></div>
                                
                                <!-- Square -->
                                <div class="floating-shape square position-absolute animate-float-2"
                                    style="top: 60%; left: 5%; width: 20px; height: 20px; background: linear-gradient(45deg, rgba(138, 43, 226, 0.4), rgba(72, 61, 139, 0.4)); transform: rotate(45deg);"></div>
                                
                                <!-- Hexagon -->
                                <div class="floating-shape hexagon position-absolute animate-float-3"
                                    style="top: 25%; right: 8%; width: 25px; height: 25px; background: rgba(138, 43, 226, 0.3); clip-path: polygon(30% 0%, 70% 0%, 100% 50%, 70% 100%, 30% 100%, 0% 50%);"></div>
                                
                                <!-- Circle -->
                                <div class="floating-shape circle position-absolute animate-float-4"
                                    style="bottom: 20%; right: 15%; width: 18px; height: 18px; background: linear-gradient(135deg, rgba(138, 43, 226, 0.4), rgba(75, 0, 130, 0.4)); border-radius: 50%;"></div>
                                
                                <!-- Diamond -->
                                <div class="floating-shape diamond position-absolute animate-float-5"
                                    style="top: 45%; right: 20%; width: 15px; height: 15px; background: rgba(138, 43, 226, 0.3); transform: rotate(45deg);"></div>
                            </div>

                            <!-- Orbiting elements around logo -->
                            <div class="orbit-container position-absolute top-50 start-50 translate-middle" style="width: 550px; height: 550px;">
                                <div class="orbit-path position-absolute animate-orbit-slow" style="width: 100%; height: 100%; border-radius: 50%;">
                                    <div class="orbit-element position-absolute bg-primary rounded-circle animate-orbit-element"
                                        style="width: 8px; height: 8px; top: -4px; left: 50%; margin-left: -4px;"></div>
                                </div>
                                
                                <div class="orbit-path position-absolute animate-orbit-medium" style="width: 80%; height: 80%; top: 10%; left: 10%; border-radius: 50%;">
                                    <div class="orbit-element position-absolute bg-success rounded-circle animate-orbit-element"
                                        style="width: 6px; height: 6px; top: -3px; left: 50%; margin-left: -3px;"></div>
                                </div>
                                
                                <div class="orbit-path position-absolute animate-orbit-fast" style="width: 60%; height: 60%; top: 20%; left: 20%; border-radius: 50%;">
                                    <div class="orbit-element position-absolute bg-warning rounded-circle animate-orbit-element"
                                        style="width: 5px; height: 5px; top: -2.5px; left: 50%; margin-left: -2.5px;"></div>
                                </div>
                            </div>

                            <!-- Particle effects -->
                            <div class="particles position-absolute w-100 h-100">
                                <div class="particle position-absolute animate-particle-1" style="top: 20%; left: 30%; width: 3px; height: 3px; background: rgba(138, 43, 226, 0.6); border-radius: 50%;"></div>
                                <div class="particle position-absolute animate-particle-2" style="top: 70%; left: 25%; width: 2px; height: 2px; background: rgba(138, 43, 226, 0.5); border-radius: 50%;"></div>
                                <div class="particle position-absolute animate-particle-3" style="top: 40%; right: 25%; width: 3px; height: 3px; background: rgba(138, 43, 226, 0.4); border-radius: 50%;"></div>
                                <div class="particle position-absolute animate-particle-4" style="top: 80%; right: 30%; width: 2px; height: 2px; background: rgba(138, 43, 226, 0.6); border-radius: 50%;"></div>
                            </div>

                            <!-- Gradient waves background -->
                            <div class="wave-bg position-absolute w-100 h-100" style="z-index: -2;">
                                <div class="wave wave-1 position-absolute animate-wave-1" 
                                    style="width: 100%; height: 100%; background: linear-gradient(45deg, transparent, rgba(138, 43, 226, 0.05), transparent); border-radius: 50%; transform: scale(0.5);"></div>
                                <div class="wave wave-2 position-absolute animate-wave-2" 
                                    style="width: 100%; height: 100%; background: linear-gradient(-45deg, transparent, rgba(72, 61, 139, 0.05), transparent); border-radius: 50%; transform: scale(0.7);"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Background decorative elements -->
            <div class="hero-bg-decoration position-absolute w-100 h-100 top-0 start-0" style="z-index: -3; overflow: hidden;">
                <div class="bg-shape position-absolute animate-bg-float-1" 
                    style="top: 10%; right: 5%; width: 100px; height: 100px; background: linear-gradient(135deg, rgba(138, 43, 226, 0.03), rgba(72, 61, 139, 0.03)); border-radius: 30%; transform: rotate(15deg);"></div>
                <div class="bg-shape position-absolute animate-bg-float-2" 
                    style="bottom: 15%; left: 8%; width: 80px; height: 80px; background: linear-gradient(45deg, rgba(138, 43, 226, 0.04), rgba(75, 0, 130, 0.04)); border-radius: 40%; transform: rotate(-20deg);"></div>
            </div>
        </section>

       {{-- Coverflow Carousel Section --}}
        <section>
            <div class="container-fluid "> 
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark mb-3">Explora nuestras vistas</h2>
                    <p class="lead text-muted">Descubre cómo GestorLate puede transformar la gestión de tu negocio</p>
                </div>
            </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="swiper mySwiper position-relative">
                        <div class="swiper-wrapper">

                            {{-- Slide 1 --}}
                            <div class="swiper-slide">
                            <div class="slide-content text-center">
                                <img src="{{ asset('/imagenes/general/Iniciopng.png') }}" alt="Dashboard Principal" class="img-fluid rounded-4 shadow-lg">
                                <h5 class="fw-bold text-primary mt-2">Dashboard Principal</h5>
                                <p class="text-muted small">Vista general de tu negocio</p>
                            </div>
                            </div>

                            {{-- Slide 2 --}}
                            <div class="swiper-slide">
                            <div class="slide-content text-center">
                                <img src="{{ asset('/imagenes/general/Pantalla-productos.png') }}" alt="Gestión de Productos" class="img-fluid rounded-4 shadow-lg">
                                <h5 class="fw-bold text-primary mt-2">Gestión de Productos</h5>
                                <p class="text-muted small">Administra tu inventario</p>
                            </div>
                            </div>

                            {{-- Slide 3 --}}
                            <div class="swiper-slide">
                            <div class="slide-content text-center">
                                <img src="{{ asset('/imagenes/general/Proveedores.png') }}" alt="Gestión de Proveedores" class="img-fluid rounded-4 shadow-lg">
                                <h5 class="fw-bold text-primary mt-2">Gestión de Proveedores</h5>
                                <p class="text-muted small">Controla tus proveedores</p>
                            </div>
                            </div>

                            {{-- Slide 4 --}}
                            <div class="swiper-slide">
                            <div class="slide-content text-center">
                                <img src="{{ asset('/imagenes/general/Pedidos.png') }}" alt="Gestión de Pedidos" class="img-fluid rounded-4 shadow-lg">
                                <h5 class="fw-bold text-primary mt-2">Gestión de Pedidos</h5>
                                <p class="text-muted small">Organiza tus pedidos</p>
                            </div>
                            </div>

                            {{-- Slide 5 --}}
                            <div class="swiper-slide">
                            <div class="slide-content text-center">
                                <img src="{{ asset('/imagenes/general/Tarjeta.png') }}" alt="Reportes y Análisis" class="img-fluid rounded-4 shadow-lg">
                                <h5 class="fw-bold text-primary mt-2">Visualización de los pedidos</h5>
                                <p class="text-muted small">Manejo sencillo de las líneas de pedido</p>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Pagination (optional dots) -->
                    <div class="swiper-pagination mt-3"></div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        {{-- Features Section --}}
        <section id="features" class="py-5 position-relative overflow-hidden">
            <!-- Background decorative elements -->
            <div class="features-bg-decoration position-absolute w-100 h-100 top-0 start-0" style="z-index: -1;">
                <div class="bg-gradient-shape position-absolute animate-bg-pulse-1" 
                    style="top: 15%; left: -5%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(138, 43, 226, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
                <div class="bg-gradient-shape position-absolute animate-bg-pulse-2" 
                    style="bottom: 20%; right: -8%; width: 250px; height: 250px; background: radial-gradient(circle, rgba(25, 135, 84, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
                <div class="bg-gradient-shape position-absolute animate-bg-pulse-3" 
                    style="top: 50%; left: 50%; transform: translateX(-50%); width: 180px; height: 180px; background: radial-gradient(circle, rgba(255, 193, 7, 0.03) 0%, transparent 70%); border-radius: 50%;"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="display-4 fw-bold text-dark mb-4 animate-title-entrance">Todo lo que necesitas en un solo lugar</h2>
                        <p class="lead text-muted fs-4 animate-subtitle-entrance">Optimiza cada aspecto de tu negocio con nuestras herramientas integradas</p>
                    </div>
                </div>
                <div class="row g-5">
                    {{-- Product Management --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card h-100 p-5 bg-white rounded-5 shadow-lg border-0 position-relative overflow-hidden animate-card-entrance" 
                            style="min-height: 400px; transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);">
                            
                            <!-- Animated background gradient -->
                            <div class="card-bg-gradient position-absolute top-0 start-0 w-100 h-100 opacity-0" 
                                style="background: linear-gradient(135deg, rgba(138, 43, 226, 0.05) 0%, rgba(138, 43, 226, 0.01) 100%); transition: opacity 0.4s ease;"></div>
                            
                            <!-- Floating particles inside card -->
                            <div class="card-particles position-absolute w-100 h-100 top-0 start-0">
                                <div class="card-particle position-absolute animate-card-particle-1" 
                                    style="top: 20%; left: 15%; width: 4px; height: 4px; background: rgba(138, 43, 226, 0.3); border-radius: 50%;"></div>
                                <div class="card-particle position-absolute animate-card-particle-2" 
                                    style="top: 70%; right: 20%; width: 3px; height: 3px; background: rgba(138, 43, 226, 0.4); border-radius: 50%;"></div>
                                <div class="card-particle position-absolute animate-card-particle-3" 
                                    style="bottom: 30%; left: 25%; width: 2px; height: 2px; background: rgba(138, 43, 226, 0.5); border-radius: 50%;"></div>
                            </div>

                            <div class="feature-icon mb-4 position-relative z-1">
                                <div class="icon-container bg-primary bg-opacity-10 rounded-4 p-4 d-inline-block position-relative animate-icon-hover" 
                                    style="transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);">
                                    <i class="bi bi-box-seam fs-1 text-primary animate-icon-pulse"></i>
                                    <!-- Icon glow effect -->
                                    <div class="icon-glow position-absolute top-50 start-50 translate-middle w-100 h-100 rounded-4 opacity-0" 
                                        style="background: rgba(138, 43, 226, 0.1); transition: opacity 0.4s ease;"></div>
                                </div>
                            </div>
                            
                            <h3 class="fw-bold mb-4 fs-3 position-relative z-1">Gestión de Productos</h3>
                            <p class="text-muted mb-4 fs-5 lh-lg position-relative z-1">
                                Controla tu inventario de forma inteligente. Añade, edita y organiza todos tus productos 
                                con información detallada, precios y disponibilidad en tiempo real.
                            </p>

                            {{-- Enhanced decorative elements --}}
                            <div class="position-absolute animate-decorative-float-1" style="top: -30px; right: -30px; opacity: 0.08; z-index: 0;">
                                <i class="bi bi-box-seam" style="font-size: 120px; color: #8B2BE2;"></i>
                            </div>
                            
                            <!-- Geometric decorations -->
                            <div class="geometric-decoration position-absolute animate-geometric-1" 
                                style="top: 15%; right: 15%; width: 20px; height: 20px; background: linear-gradient(45deg, rgba(138, 43, 226, 0.2), rgba(138, 43, 226, 0.1)); transform: rotate(45deg);"></div>
                            <div class="geometric-decoration position-absolute animate-geometric-2" 
                                style="bottom: 25%; left: 10%; width: 0; height: 0; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 12px solid rgba(138, 43, 226, 0.15);"></div>

                            <!-- Card border animation -->
                            <div class="card-border-animation position-absolute top-0 start-0 w-100 h-100 rounded-5 opacity-0" 
                                style="border: 2px solid rgba(138, 43, 226, 0.3); transition: opacity 0.4s ease;"></div>
                        </div>
                    </div>

                    {{-- Supplier Management --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card h-100 p-5 bg-white rounded-5 shadow-lg border-0 position-relative overflow-hidden animate-card-entrance" 
                            style="min-height: 400px; transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); animation-delay: 0.2s;">
                            
                            <!-- Animated background gradient -->
                            <div class="card-bg-gradient position-absolute top-0 start-0 w-100 h-100 opacity-0" 
                                style="background: linear-gradient(135deg, rgba(25, 135, 84, 0.05) 0%, rgba(25, 135, 84, 0.01) 100%); transition: opacity 0.4s ease;"></div>
                            
                            <!-- Floating particles inside card -->
                            <div class="card-particles position-absolute w-100 h-100 top-0 start-0">
                                <div class="card-particle position-absolute animate-card-particle-1" 
                                    style="top: 25%; right: 18%; width: 4px; height: 4px; background: rgba(25, 135, 84, 0.3); border-radius: 50%; animation-delay: 1s;"></div>
                                <div class="card-particle position-absolute animate-card-particle-2" 
                                    style="top: 65%; left: 22%; width: 3px; height: 3px; background: rgba(25, 135, 84, 0.4); border-radius: 50%; animation-delay: 1.5s;"></div>
                                <div class="card-particle position-absolute animate-card-particle-3" 
                                    style="bottom: 35%; right: 25%; width: 2px; height: 2px; background: rgba(25, 135, 84, 0.5); border-radius: 50%; animation-delay: 0.5s;"></div>
                            </div>

                            <div class="feature-icon mb-4 position-relative z-1">
                                <div class="icon-container bg-success bg-opacity-10 rounded-4 p-4 d-inline-block position-relative animate-icon-hover" 
                                    style="transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);">
                                    <i class="bi bi-people-fill fs-1 text-success animate-icon-pulse" style="animation-delay: 0.5s;"></i>
                                    <!-- Icon glow effect -->
                                    <div class="icon-glow position-absolute top-50 start-50 translate-middle w-100 h-100 rounded-4 opacity-0" 
                                        style="background: rgba(25, 135, 84, 0.1); transition: opacity 0.4s ease;"></div>
                                </div>
                            </div>
                            
                            <h3 class="fw-bold mb-4 fs-3 position-relative z-1">Gestión de Proveedores</h3>
                            <p class="text-muted mb-4 fs-5 lh-lg position-relative z-1">
                                Mantén una base de datos completa de tus proveedores. Gestiona contactos, 
                                condiciones comerciales y historial de colaboración de manera eficiente.
                            </p>

                            {{-- Enhanced decorative elements --}}
                            <div class="position-absolute animate-decorative-float-2" style="top: -30px; right: -30px; opacity: 0.08; z-index: 0;">
                                <i class="bi bi-people-fill" style="font-size: 120px; color: #198754;"></i>
                            </div>
                            
                            <!-- Geometric decorations -->
                            <div class="geometric-decoration position-absolute animate-geometric-3" 
                                style="top: 20%; left: 12%; width: 18px; height: 18px; background: linear-gradient(45deg, rgba(25, 135, 84, 0.2), rgba(25, 135, 84, 0.1)); border-radius: 50%;"></div>
                            <div class="geometric-decoration position-absolute animate-geometric-4" 
                                style="bottom: 20%; right: 15%; width: 15px; height: 15px; background: linear-gradient(45deg, rgba(25, 135, 84, 0.15), rgba(25, 135, 84, 0.05)); clip-path: polygon(30% 0%, 70% 0%, 100% 50%, 70% 100%, 30% 100%, 0% 50%);"></div>

                            <!-- Card border animation -->
                            <div class="card-border-animation position-absolute top-0 start-0 w-100 h-100 rounded-5 opacity-0" 
                                style="border: 2px solid rgba(25, 135, 84, 0.3); transition: opacity 0.4s ease;"></div>
                        </div>
                    </div>

                    {{-- Order Management --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card h-100 p-5 bg-white rounded-5 shadow-lg border-0 position-relative overflow-hidden animate-card-entrance" 
                            style="min-height: 400px; transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); animation-delay: 0.4s;">
                            
                            <!-- Animated background gradient -->
                            <div class="card-bg-gradient position-absolute top-0 start-0 w-100 h-100 opacity-0" 
                                style="background: linear-gradient(135deg, rgba(255, 193, 7, 0.05) 0%, rgba(255, 193, 7, 0.01) 100%); transition: opacity 0.4s ease;"></div>
                            
                            <!-- Floating particles inside card -->
                            <div class="card-particles position-absolute w-100 h-100 top-0 start-0">
                                <div class="card-particle position-absolute animate-card-particle-1" 
                                    style="top: 30%; left: 20%; width: 4px; height: 4px; background: rgba(255, 193, 7, 0.4); border-radius: 50%; animation-delay: 2s;"></div>
                                <div class="card-particle position-absolute animate-card-particle-2" 
                                    style="top: 60%; right: 25%; width: 3px; height: 3px; background: rgba(255, 193, 7, 0.5); border-radius: 50%; animation-delay: 2.5s;"></div>
                                <div class="card-particle position-absolute animate-card-particle-3" 
                                    style="bottom: 40%; left: 30%; width: 2px; height: 2px; background: rgba(255, 193, 7, 0.6); border-radius: 50%; animation-delay: 1.8s;"></div>
                            </div>

                            <div class="feature-icon mb-4 position-relative z-1">
                                <div class="icon-container bg-warning bg-opacity-10 rounded-4 p-4 d-inline-block position-relative animate-icon-hover" 
                                    style="transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);">
                                    <i class="bi bi-clipboard-check fs-1 text-warning animate-icon-pulse" style="animation-delay: 1s;"></i>
                                    <!-- Icon glow effect -->
                                    <div class="icon-glow position-absolute top-50 start-50 translate-middle w-100 h-100 rounded-4 opacity-0" 
                                        style="background: rgba(255, 193, 7, 0.1); transition: opacity 0.4s ease;"></div>
                                </div>
                            </div>
                            
                            <h3 class="fw-bold mb-4 fs-3 position-relative z-1">Gestión de Pedidos</h3>
                            <p class="text-muted mb-4 fs-5 lh-lg position-relative z-1">
                                Simplifica el proceso de pedidos desde la creación hasta la entrega. 
                                Rastrea el estado, gestiona fechas y mantén a tus clientes informados.
                            </p>

                            {{-- Enhanced decorative elements --}}
                            <div class="position-absolute animate-decorative-float-3" style="top: -30px; right: -30px; opacity: 0.08; z-index: 0;">
                                <i class="bi bi-clipboard-check" style="font-size: 120px; color: #FFC107;"></i>
                            </div>
                            
                            <!-- Geometric decorations -->
                            <div class="geometric-decoration position-absolute animate-geometric-5" 
                                style="top: 18%; right: 20%; width: 16px; height: 16px; background: linear-gradient(45deg, rgba(255, 193, 7, 0.25), rgba(255, 193, 7, 0.1)); transform: rotate(45deg);"></div>
                            <div class="geometric-decoration position-absolute animate-geometric-6" 
                                style="bottom: 30%; left: 18%; width: 14px; height: 14px; background: linear-gradient(135deg, rgba(255, 193, 7, 0.2), rgba(255, 193, 7, 0.05)); border-radius: 50%;"></div>

                            <!-- Card border animation -->
                            <div class="card-border-animation position-absolute top-0 start-0 w-100 h-100 rounded-5 opacity-0" 
                                style="border: 2px solid rgba(255, 193, 7, 0.3); transition: opacity 0.4s ease;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       {{-- Enhanced CTA Section --}}
        <section class="cta-section position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, #8B2BE2 0%, #4B0082 50%, #663399 100%);">
            <!-- Animated background elements -->
            <div class="cta-bg-decoration position-absolute w-100 h-100 top-0 start-0" style="z-index: 1;">
                <!-- Floating geometric shapes -->
                <div class="floating-cta-shape position-absolute animate-float-slow" 
                    style="top: 15%; left: 5%; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.05); border-radius: 50%; transform: rotate(45deg);"></div>
                <div class="floating-cta-shape position-absolute animate-float-medium" 
                    style="top: 60%; right: 8%; width: 60px; height: 60px; background: rgba(255, 255, 255, 0.03); clip-path: polygon(30% 0%, 70% 0%, 100% 50%, 70% 100%, 30% 100%, 0% 50%);"></div>
                <div class="floating-cta-shape position-absolute animate-float-fast" 
                    style="bottom: 20%; left: 10%; width: 40px; height: 40px; background: rgba(255, 255, 255, 0.04); transform: rotate(30deg);"></div>
                
                <!-- Gradient waves -->
                <div class="cta-wave position-absolute animate-wave-slow" 
                    style="top: 0; left: -50%; width: 200%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.02), transparent); transform: skewY(-2deg);"></div>
                <div class="cta-wave position-absolute animate-wave-reverse" 
                    style="bottom: 0; right: -50%; width: 200%; height: 100%; background: linear-gradient(-90deg, transparent, rgba(255, 255, 255, 0.015), transparent); transform: skewY(2deg);"></div>
                
                <!-- Particle effects -->
                <div class="cta-particles position-absolute w-100 h-100">
                    <div class="cta-particle position-absolute animate-particle-float-1" 
                        style="top: 25%; left: 20%; width: 3px; height: 3px; background: rgba(255, 255, 255, 0.4); border-radius: 50%;"></div>
                    <div class="cta-particle position-absolute animate-particle-float-2" 
                        style="top: 70%; left: 30%; width: 2px; height: 2px; background: rgba(255, 255, 255, 0.3); border-radius: 50%;"></div>
                    <div class="cta-particle position-absolute animate-particle-float-3" 
                        style="top: 40%; right: 25%; width: 4px; height: 4px; background: rgba(255, 255, 255, 0.5); border-radius: 50%;"></div>
                    <div class="cta-particle position-absolute animate-particle-float-4" 
                        style="bottom: 30%; right: 15%; width: 2px; height: 2px; background: rgba(255, 255, 255, 0.3); border-radius: 50%;"></div>
                </div>
            </div>

            <div class="container position-relative" style="z-index: 2;">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 col-xl-8">
                        <!-- Main CTA content -->
                        <div class="cta-content-wrapper position-relative">
                            <!-- Glowing effect behind content -->
                            <div class="cta-glow position-absolute top-50 start-50 translate-middle" 
                                style="width: 120%; height: 120%; background: radial-gradient(circle, rgba(255, 255, 255, 0.03) 0%, transparent 70%); border-radius: 50%; z-index: -1;"></div>
                            
                            <!-- Icon with animation -->
                            <div class="cta-icon mb-4 animate-icon-pulse-cta">
                                <div class="icon-wrapper d-inline-block position-relative">
                                    <div class="icon-bg position-absolute top-50 start-50 translate-middle animate-icon-glow-cta" 
                                        style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%; z-index: -1;"></div>
                                    <i class="bi bi-lightning-charge-fill text-white" style="font-size: 3rem;"></i>
                                </div>
                            </div>

                            <!-- Main headline -->
                            <h2 class="display-4 fw-bold text-white mb-4 animate-text-entrance">
                                Transforma tu negocio
                                <span class="d-block text-warning animate-text-highlight">¡en minutos!</span>
                            </h2>
                            
                            <!-- Subheadline -->
                            <p class="lead text-white-50 mb-5 fs-4 lh-lg animate-text-entrance-delay">
                               Ya son varios los bares que han apostado por una gestión más inteligente. <br>
                                <strong class="text-white">Empieza a simplificar la gestión de tu negocio con GestorLate.</strong>
                            </p>


                            <!-- Main CTA button -->
                            <div class="cta-button-wrapper position-relative animate-button-entrance">
                                <a href="{{ route('singUp') }}" class="btn btn-light btn-lg px-5 py-3 position-relative overflow-hidden fw-bold fs-5 rounded-pill shadow-lg"
                                style="min-width: 280px; transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); transform: translateY(0);">
                                    
                                    <!-- Button background animation -->
                                    <div class="button-bg-animation position-absolute top-0 start-0 w-100 h-100 opacity-0" 
                                        style="background: linear-gradient(45deg, #FFC107, #FF6B35); transition: opacity 0.4s ease;"></div>
                                    
                                    <!-- Button content -->
                                    <span class="position-relative d-flex align-items-center justify-content-center">
                                        <i class="bi bi-rocket-takeoff me-2 animate-icon-bounce"></i>
                                        ¡Comenzar!
                                        <i class="bi bi-arrow-right ms-2 animate-arrow-slide"></i>
                                    </span>

                                    <!-- Button shine effect -->
                                    <div class="button-shine position-absolute top-0 start-0 w-100 h-100 opacity-0" 
                                        style="background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.3) 50%, transparent 70%); transform: translateX(-100%);"></div>
                                </a>
                                
                                <!-- Button glow effect -->
                                <div class="button-glow position-absolute top-50 start-50 translate-middle w-100 h-100 opacity-0 rounded-pill" 
                                    style="background: rgba(255, 255, 255, 0.2); filter: blur(20px); z-index: -1; transition: opacity 0.4s ease;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom decorative border -->
            <div class="cta-border position-absolute bottom-0 start-0 w-100" 
                style="height: 4px; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);"></div>
        </section>
@endsection
 @stack('styles')
@section('scripts')
    <script src="{{ asset('js/gestorLate.js') }}"></script>
@endsection
