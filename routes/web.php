<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('accueil');

Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/passion', function () {
    return view('passion');
})->name('passion');

Route::get('/projets', function () {
    return view('projets');
})->name('projets');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
