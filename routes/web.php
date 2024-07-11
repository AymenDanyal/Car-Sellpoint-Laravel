<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


// Home Page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/searchHome', [HomeController::class, 'search'])->name('search');
Route::post('/searchForm', [HomeController::class, 'searchForm'])->name('searchForm');

// Product Page routes
Route::get('/listing/{brandId}/{bodyTypeId}', [ProductController::class, 'index'])->name('listing');
Route::get('/listingDetails/{carId}', [ProductController::class, 'listingDetails'])->name('listingDetails');
Route::post('/search', [ProductController::class, 'search'])->name('search');



// Backend section start

Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');
   
});
