<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function categoryId(Categories $categry)
    {
        # code...
    }
}
