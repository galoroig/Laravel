<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function estado() 
    { 
        return response()->json([ 
            'app' => config('app.name'),
            'entorno' => config('app.env'), 
            'version' => app()->version(), 
            'hora' => now()->toDateTimeString(), 
            'autor' => config('custom.autor'),
        ]);
    }
}
