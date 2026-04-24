<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductController;

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

Route::get('/product', [ProductController::class, 'create']);



Route::post('/product', [ProductController::class, 'store']);

Route::get('/productos', [ProductoController::class, 'index']);

Route::resource('products', ProductController::class);