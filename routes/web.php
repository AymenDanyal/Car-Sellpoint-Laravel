<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


// Home Page routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Page routes
Route::get('/listing/{brandId}/{bodyTypeId}', [ProductController::class, 'index'])->name('listing');
Route::get('/listingDetails/{carId}', [ProductController::class, 'listingDetails'])->name('listingDetails');
Route::post('/search', [ProductController::class, 'search'])->name('search');

