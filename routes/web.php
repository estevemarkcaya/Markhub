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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feature', function () {
    return view('feature');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::name('volleyball.')->group(function () {
    Route::get('/beachvolley', function () {
        return view('beachvolley');
    })->name('beachvolley');
    Route::get('/hardcourt', function () {
        return view('hardcourt');
    })->name('hardcourt');
    Route::get('/registerhere', function () {
        return view('registerhere');
    })->name('registerhere');
});

Route::get('/login', function () {
    return view('login');
});