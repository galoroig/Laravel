<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required|string|max:255',
        ]);
        
        Product::create($request->all());

        /* return redirect('/products'); */
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
{
    //
}

public function edit(Product $product)
{
    //
}

public function update(Request $request, Product $product)
{
    //
}

public function destroy(Product $product)
{
    //
}
}
