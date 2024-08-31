<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');


Route::get('/about', function () {
    return view('about.index');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact.index');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');