<?php
use App\Http\Controllers\SiteController;

// Rutas existentes
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Nueva ruta creada para el envío de información
Route::post('/contact', [SiteController::class, 'handleContact'])->name('contact.submit');
