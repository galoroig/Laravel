<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = [
            ['nombre' => 'Teclado mecánico', 'precio' => 45000, 'stock' => 12],
            ['nombre' => 'Monitor 24"',      'precio' => 180000, 'stock' => 5],
            ['nombre' => 'Mouse inalámbrico', 'precio' => 22000, 'stock' => 0],
            ['nombre' => 'Headset gaming',   'precio' => 38000, 'stock' => 8],
        ];

        return view('products.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
