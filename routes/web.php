<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/catalogo', function () {
    return view('home');
})->name('catalogue');

Route::get('/bio', function () {
    return view('home');
})->name('about');

Route::get('/contatto', function () {
    return view('home');
})->name('contact');