<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta simple que devuelve texto 
Route::get('/hola', function () { 
return 'Hola desde Laravel!'; 
}); 

// Ruta con parámetro en la URL 
Route::get('/hola/{nombre}', function ($nombre) { 
return 'Hola, ' . $nombre . '!'; });

Route::get('/products', [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/productos', [ProductoController::class, 'index']);