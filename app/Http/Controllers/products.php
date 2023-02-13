<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Product;
use App\Models\Categories;
use Illuminate\Http\Request;

class products extends Controller
{
    public function index()
    {
        // $products = Product::with('categoria')->where('categoria_id', '1')->get();

        // dd($products->toArray());

        return view('frontend.productos.index');
    }

    public function productId(Product $product)
    {
        # code...
    }

    public function categoryId(Categories $id)
    {
        return view('frontend.categorias.index', ['categoria' => $id]);
    }
}
