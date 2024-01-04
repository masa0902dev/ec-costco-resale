<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;


Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('product.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::controller(ProductController::class)->group(function() {
    Route::name('product.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/product/{id}', 'show')->name('show');
    });
});


Route::controller(LineItemController::class)->group(function() {
    Route::name('line_item.')->group(function() {
        Route::post('/line_item/create', 'create')->name('create');
        Route::post('/line_item/delete', 'delete')->name('delete');
    });
});


Route::controller(CartController::class)->group(function() { 
    Route::name('cart.')->group(function () {
        Route::get('/cart', 'index')->name('index');
        Route::get('/cart/checkout', 'checkout')->name('checkout');
        Route::get('/cart/success', 'success')->name('success');
    });
});


Route::controller(SearchController::class)->group(function() { 
    Route::name('search.')->group(function () {
        Route::get('/search', 'index')->name('index');
        Route::get('/search/result', 'result_get')->name('result');
        Route::post('/search/result', 'result')->name('result');
    });
});