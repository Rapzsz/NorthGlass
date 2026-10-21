<?php

use App\Http\Controllers\ProjectInquiryController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('home');

Route::get('/our-services', [WebsiteController::class, 'services'])
    ->name('services.index');

Route::get('/our-services/{slug}', [WebsiteController::class, 'service'])
    ->name('services.show');

Route::get('/product', [WebsiteController::class, 'products'])
    ->name('products.index');

Route::get('/product/{slug}', [WebsiteController::class, 'product'])
    ->name('products.show');

Route::redirect('/about', '/#about')->name('about');

Route::get('/lets-build', [WebsiteController::class, 'contact'])
    ->name('contact.create');

Route::post('/lets-build', [ProjectInquiryController::class, 'store'])
    ->name('contact.store');