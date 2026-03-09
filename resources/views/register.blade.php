@extends('layouts.app')

@section('title', 'Regístrate en Neflis')

@section('styles')
<style>
    .register-container {
        min-height: calc(100vh - 70px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3rem 0;
        background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #000000 100%);
    }
    
    .register-card {
        background: linear-gradient(145deg, #1f1f1f, #0a0a0a);
        border: 1px solid #333;
        border-radius: 20px;
        padding: 3rem;
        max-width: 600px;
        width: 100%;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    
    .register-title {
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .form-label {
        color: #fff;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    
    .form-control, .form-select {
        background-color: #333;
        border: 1px solid #555;
        color: white;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        background-color: #404040;
        border-color: var(--neflis-red);
        color: white;
        box-shadow: 0 0 0 0.2rem rgba(229, 9, 20, 0.25);
    }
    
    .form-control::placeholder {
        color: #999;
    }
    
    .input-icon {
        position: relative;
    }
    
    .input-icon i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--neflis-red);
    }
    
    .input-icon .form-control,
    .input-icon .form-select {
        padding-left: 45px;
    }
    
    .btn-submit {
        background: linear-gradient(90deg, var(--neflis-red), #f40612);
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 8px;
        font-weight: bold;
        font-size: 1.1rem;
        width: 100%;
        margin-top: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(229, 9, 20, 0.3);
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(229, 9, 20, 0.5);
    }
    
    .plan-option {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 0.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .plan-option:hover {
        background-color: rgba(229, 9, 20, 0.1);
        border-color: var(--neflis-red);
    }
    
    .invalid-feedback {
        color: #ff6b6b;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
    
    .back-link {
        text-align: center;
        margin-top: 2rem;
    }
    
    .back-link a {
        color: var(--neflis-gray);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .back-link a:hover {
        color: white;
    }
</style>
@endsection

@section('content')
<div class="register-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="register-card">
                    <h1 class="register-title">
                        <i class="fas fa-user-plus me-2"></i>
                        Regístrate en Neflis
                    </h1>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        
                        <!-- Name Field -->
                        <div class="mb-4">
                            <label for="name" class="form-label">
                                Nombre completo <span class="text-danger">*</span>
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                                <input 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    id="name" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    placeholder="Nombre completo" 
                                    required
                                >
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="form-label">
                                Correo electrónico <span class="text-danger">*</span>
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-envelope"></i>
                                <input 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="Correo electrónico" 
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Phone Field -->
                        <div class="mb-4">
                            <label for="phone" class="form-label">
                                Teléfono (opcional)
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-phone"></i>
                                <input 
                                    type="tel" 
                                    class="form-control @error('phone') is-invalid @enderror" 
                                    id="phone" 
                                    name="phone" 
                                    value="{{ old('phone') }}"
                                    placeholder="Teléfono (opcional)"
                                >
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Plan Selection -->
                        <div class="mb-4">
                            <label for="plan" class="form-label">
                                Selecciona tu plan <span class="text-danger">*</span>
                            </label>
                            <div class="input-icon">
                                <i class="fas fa-crown"></i>
                                <select 
                                    class="form-select @error('plan') is-invalid @enderror" 
                                    id="plan" 
                                    name="plan" 
                                    required
                                >
                                    <option value="">Selecciona tu plan</option>
                                    <option value="basic" {{ old('plan') == 'basic' ? 'selected' : '' }}>
                                        Plan Básico - $9.99/mes
                                    </option>
                                    <option value="standard" {{ old('plan') == 'standard' ? 'selected' : '' }}>
                                        Plan Estándar - $14.99/mes
                                    </option>
                                    <option value="premium" {{ old('plan') == 'premium' ? 'selected' : '' }}>
                                        Plan Premium - $19.99/mes
                                    </option>
                                </select>
                                @error('plan')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Plan Details -->
                        <div class="alert alert-dark" id="planDetails" style="display: none;">
                            <h6 class="alert-heading mb-2"></h6>
                            <p class="mb-0 small"></p>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-play-circle me-2"></i>
                            Comenzar membresía
                        </button>
                    </form>
                    
                    <div class="back-link">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-arrow-left me-2"></i>
                            Volver al inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Show plan details when selected
    document.getElementById('plan').addEventListener('change', function() {
        const planDetails = document.getElementById('planDetails');
        const selectedPlan = this.value;
        
        const plans = {
            basic: {
                title: 'Plan Básico',
                desc: 'Calidad buena. Disfruta en 1 dispositivo a la vez.'
            },
            standard: {
                title: 'Plan Estándar',
                desc: 'Calidad mejor. Disfruta en 2 dispositivos a la vez. Calidad Full HD.'
            },
            premium: {
                title: 'Plan Premium',
                desc: 'Calidad óptima. Disfruta en 4 dispositivos a la vez. Calidad Ultra HD 4K + HDR.'
            }
        };
        
        if (selectedPlan && plans[selectedPlan]) {
            planDetails.style.display = 'block';
            planDetails.querySelector('.alert-heading').textContent = plans[selectedPlan].title;
            planDetails.querySelector('p').textContent = plans[selectedPlan].desc;
        } else {
            planDetails.style.display = 'none';
        }
    });
</script>
@endsection
