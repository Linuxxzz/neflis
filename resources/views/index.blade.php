@extends('layouts.app')

@section('title', 'Neflis - ' . __('hero_title'))

@section('styles')
<style>
    /* Hero Section - Aplicando Gestalt: Continuidad y Cierre */
    .hero-section {
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.8)), 
                    url('https://images.unsplash.com/photo-1574267432644-f86c0ab89d03?w=1920') center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
    }
    
    .hero-content {
        max-width: 800px;
        padding: 2rem;
        z-index: 1;
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
    }
    
    /* Features Section - Aplicando Gestalt: Proximidad y Simetría */
    .features-section {
        padding: 5rem 0;
        background-color: #000;
    }
    
    .feature-card {
        background: linear-gradient(145deg, #1a1a1a, #0a0a0a);
        border-radius: 15px;
        padding: 2rem;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #333;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(229, 9, 20, 0.3);
    }
    
    .feature-icon {
        font-size: 3rem;
        color: var(--neflis-red);
        margin-bottom: 1.5rem;
    }
    
    /* Plans Section - Aplicando Gestalt: Proximidad y Balance Simétrico */
    .plans-section {
        padding: 5rem 0;
        background: linear-gradient(180deg, #000 0%, #141414 100%);
    }
    
    .plan-card {
        background: linear-gradient(145deg, #1f1f1f, #141414);
        border: 2px solid #333;
        border-radius: 15px;
        padding: 2.5rem;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .plan-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: var(--neflis-red);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .plan-card:hover {
        transform: scale(1.05);
        border-color: var(--neflis-red);
        box-shadow: 0 15px 40px rgba(229, 9, 20, 0.4);
    }
    
    .plan-card:hover::before {
        transform: scaleX(1);
    }
    
    .plan-name {
        font-size: 2rem;
        font-weight: bold;
        color: var(--neflis-red);
        margin-bottom: 1rem;
    }
    
    .plan-price {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 1.5rem;
    }
    
    /* Content Section - Aplicando Gestalt: Compleción y Continuidad */
    .content-preview {
        padding: 5rem 0;
        background-color: #141414;
    }
    
    .content-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
        cursor: pointer;
    }
    
    .content-item:hover {
        transform: scale(1.05);
    }
    
    .content-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    
    .content-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.9));
        padding: 2rem 1rem 1rem;
        color: white;
    }
    
    /* Section Titles - Consistencia Visual */
    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 3rem;
        text-align: center;
        color: white;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Películas, series y mucho más. Ilimitado.</h1>
        <p class="hero-subtitle">Disfruta donde quieras. Cancela cuando quieras.</p>
        <p class="mb-4">¿Listo para ver? Ingresa tu correo para crear o reiniciar tu membresía.</p>
        <a href="{{ route('register') }}" class="btn btn-neflis btn-lg">
            Comienza ahora <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</section>

<!-- Features Section - Principio Gestalt: Proximidad -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">¿Por qué elegir Neflis?</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h3 class="h5 mb-3">Disfruta en tu TV</h3>
                    <p class="text-muted">Ve en smart TVs, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <h3 class="h5 mb-3">Descarga tus series</h3>
                    <p class="text-muted">Guarda tus favoritos fácilmente y siempre ten algo para ver.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="h5 mb-3">Ve donde quieras</h3>
                    <p class="text-muted">Transmite películas y series ilimitadas en tu teléfono, tablet, laptop y TV.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3 class="h5 mb-3">Crea perfiles para niños</h3>
                    <p class="text-muted">Los niños vivirán aventuras con sus personajes favoritos en un espacio diseñado para ellos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content Preview Section -->
<section class="content-preview" id="movies">
    <div class="container">
        <h2 class="section-title">Películas</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=500" alt="Película 1">
                    <div class="content-overlay">
                        <h4>Acción Extrema</h4>
                        <p class="small mb-0">2024 • HD</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?w=500" alt="Película 2">
                    <div class="content-overlay">
                        <h4>Romance Inolvidable</h4>
                        <p class="small mb-0">2024 • 4K</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1594908900066-3f47337549d8?w=500" alt="Película 3">
                    <div class="content-overlay">
                        <h4>Ciencia Ficción</h4>
                        <p class="small mb-0">2024 • Ultra HD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Series Section -->
<section class="content-preview" id="series" style="background-color: #0a0a0a;">
    <div class="container">
        <h2 class="section-title">Series</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1522869635100-9f4c5e86aa37?w=500" alt="Serie 1">
                    <div class="content-overlay">
                        <h4>Misterio Oscuro</h4>
                        <p class="small mb-0">3 Temporadas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1518676590629-3dcbd9c5a5c9?w=500" alt="Serie 2">
                    <div class="content-overlay">
                        <h4>Comedia Divertida</h4>
                        <p class="small mb-0">5 Temporadas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-item">
                    <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=500" alt="Serie 3">
                    <div class="content-overlay">
                        <h4>Acción y Suspenso</h4>
                        <p class="small mb-0">2 Temporadas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plans Section - Balance Simétrico -->
<section class="plans-section" id="plans">
    <div class="container">
        <h2 class="section-title">Elige el plan perfecto para ti</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="plan-card">
                    <h3 class="plan-name">Básico</h3>
                    <p class="plan-price">$9.99/mes</p>
                    <p class="text-muted mb-4">Buena calidad de video en HD (720p). Ve en tu teléfono, tablet, computadora o TV.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> HD (720p)</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 1 dispositivo</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Descargas ilimitadas</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn-neflis w-100">Seleccionar</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="plan-card">
                    <h3 class="plan-name">Estándar</h3>
                    <p class="plan-price">$14.99/mes</p>
                    <p class="text-muted mb-4">Excelente calidad de video en Full HD (1080p). Ve en 2 dispositivos a la vez.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Full HD (1080p)</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 2 dispositivos</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Descargas ilimitadas</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn-neflis w-100">Seleccionar</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="plan-card">
                    <h3 class="plan-name">Premium</h3>
                    <p class="plan-price">$19.99/mes</p>
                    <p class="text-muted mb-4">La mejor calidad de video en Ultra HD (4K) + HDR. Ve en 4 dispositivos a la vez.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Ultra HD (4K)</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 4 dispositivos</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Descargas ilimitadas</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn-neflis w-100">Seleccionar</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
