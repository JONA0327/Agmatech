<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/servicios', function () {
    return view('servicio');
})->name('servicios');

Route::get('/productos', function () {
    return view('producto');
})->name('productos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
