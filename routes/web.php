<?php

use App\Http\Controllers\DemoSiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DemoSiteController::class, 'home'])->name('home');
Route::get('/about', [DemoSiteController::class, 'about'])->name('about');
Route::get('/services', [DemoSiteController::class, 'services'])->name('services.index');
Route::get('/services/{slug}', [DemoSiteController::class, 'service'])->name('services.show');
Route::get('/faq', [DemoSiteController::class, 'faq'])->name('faq');
Route::get('/contact', [DemoSiteController::class, 'contact'])->name('contact');
Route::get('/quote', [DemoSiteController::class, 'quote'])->name('quote');
