<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class controladorSitio extends Controller
{
    public function inicio()
    {
        $products = Product::with('subcategory', 'productSuppliers')->get()->take(20);
        return view('frontend.inicio', ['products' => $products]);
    }
}
