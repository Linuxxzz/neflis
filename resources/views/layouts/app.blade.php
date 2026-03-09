<!DOCTYPE html>
<html lang="{{ session('locale', 'es') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Neflis - ' . __('hero_title'))</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/078a60e29c.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --neflis-red: #E50914;
            --neflis-black: #141414;
            --neflis-dark: #000000;
            --neflis-gray: #808080;
        }
        
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: var(--neflis-black);
            color: white;
            margin: 0;
            padding: 0;
        }
        
        /* Navbar Styles */
        .navbar-neflis {
            background: linear-gradient(180deg, rgba(0,0,0,0.7) 10%, transparent);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1rem 3rem;
            transition: background-color 0.3s ease;
        }
        
        .navbar-neflis.scrolled {
            background-color: var(--neflis-black);
        }
        
        .navbar-brand {
            color: var(--neflis-red) !important;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
        }
        
        .nav-link {
            color: white !important;
            margin: 0 1rem;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--neflis-gray) !important;
        }
        
        .btn-neflis {
            background-color: var(--neflis-red);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-neflis:hover {
            background-color: #f40612;
            transform: scale(1.05);
        }
        
        /* Footer Styles */
        .footer-neflis {
            background-color: var(--neflis-dark);
            color: var(--neflis-gray);
            padding: 4rem 3rem 2rem;
            margin-top: 4rem;
        }
        
        .footer-link {
            color: var(--neflis-gray);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: white;
        }
        
        /* Content spacing */
        main {
            padding-top: 70px;
            min-height: calc(100vh - 400px);
        }
        
        /* Gestalt Principles - Proximity */
        .content-group {
            margin-bottom: 3rem;
        }
        
        /* Gestalt Principles - Continuity */
        section {
            scroll-margin-top: 80px;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-neflis" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">NEFLIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    style="background-color: rgba(255,255,255,0.1);">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Explorar
                        </a>
                        <ul class="dropdown-menu" style="background-color: rgba(0,0,0,0.95);">
                            <li><a class="dropdown-item text-white" href="#movies">Películas</a></li>
                            <li><a class="dropdown-item text-white" href="#series">Series</a></li>
                            <li><a class="dropdown-item text-white" href="#documentaries">Documentales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">Planes</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i> Idioma
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="background-color: rgba(0,0,0,0.95);">
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('language.change', 'es') }}">
                                    🇪🇸 Español
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('language.change', 'en') }}">
                                    🇺🇸 English
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-neflis ms-2">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @if(session('success'))
            <div class="container mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-neflis">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-3">Acerca de</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Centro de ayuda</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Empleo</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Información corporativa</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-3">Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="footer-link">Privacidad</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Términos de uso</a></li>
                        <li class="mb-2"><a href="#" class="footer-link">Preferencias de cookies</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-3">Nuestros Socios</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://ejemplo-equipo.vercel.app" target="_blank" class="footer-link">
                                <i class="fas fa-external-link-alt"></i> Visita el proyecto del Equipo 6
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="text-white mb-3">Social</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="footer-link fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr style="border-color: var(--neflis-gray);">
            <div class="text-center mt-4">
                <p>&copy; 2026 Neflis, Inc. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
