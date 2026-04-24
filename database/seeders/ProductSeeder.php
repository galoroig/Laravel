<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->count(50)->create();

        /* Product::create([
        'name'=>'producto 1',
        'price'=>10,
        'stock'=>10,
        ]);

        Product::create([
        'name'=>'producto 2',
        'price'=>300,
        'stock'=>10,
        ]);

        Product::create([
        'name'=>'producto 3',
        'price'=>20,
        'stock'=>10,
        ]);
        
        $product = Product::find(1);

        $product->name = 'Hormigonera';
        $product->price = 2000;
        $product->stock = 1;

        $product->save();

        Product::where('price','>',1000)
        ->update(['stock'=>0]);

        $min = Product::min('price');

        $menor = Product::where('price', $min)->pluck('id');

        Product::destroy($menor);*/
    }
}