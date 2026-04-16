<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/estado', function () { 
return response()->json([ 
'app' => config('app.name'), 
'entorno' => config('app.env'), 
'version' => app()->version(), 
'hora' => now()->toDateTimeString(), 
]); 
});