<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

// Ruta principal
Route::get('/', [SubscriberController::class, 'index'])->name('home');

// Rutas de registro
Route::get('/register', [SubscriberController::class, 'create'])->name('register');
Route::post('/register', [SubscriberController::class, 'store'])->name('register.store');

// Ruta para cambiar idioma
Route::get('/language/{locale}', [SubscriberController::class, 'changeLanguage'])->name('language.change');
