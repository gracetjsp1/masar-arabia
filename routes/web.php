<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::view('/about', 'about')->name('about');

// Contact Page
Route::view('/contact', 'contact')->name('contact');

// Product Pages
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{mainSlug}', [ProductController::class, 'showSubCategories'])->name('products.subcategories');
Route::get('/products/{mainSlug}/{subSlug}', [ProductController::class, 'showSubSubCategories'])->name('products.subsubcategories');
Route::get('/products/{mainSlug}/{subSlug}/{subSubSlug}', [ProductController::class, 'showProductDetail'])->name('products.detail');

// Optional: Search
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

