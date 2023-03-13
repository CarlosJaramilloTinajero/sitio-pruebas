<?php

namespace App\Http\Controllers;

use App\Http\Helpers\FiltrosHelper;
use App\Models\categoryJerarqui;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function search(Request $request,  $search = "")
    {
        $uri = "";

        // si la busqueda es por el formulario
        if ($search == "") {
            $request->validate([
                'search' => 'required'
            ]);
            $search = $request->search;
            $uri = "search/";
        }

        // si la busqueda es por la url
        if (count($searcSplice = explode("-", $search)) > 0) {

            $categoryName = str_replace('_', ' ', $searcSplice[count($searcSplice) - 1]);

            $category = categoryJerarqui::where('name', $categoryName)->first();

            if ($category) {
                $search = $category->busqueda;
            }
        }

        $search = trim($search);

        $helperSearch = new FiltrosHelper();

        $category = null;

        // si encuentra resultado con el arbol de categorias
        if ($resultado = $helperSearch->search($search)) {
            $url = $uri . implode('-', $resultado['pathSplice']);
            $category = categoryJerarqui::find($resultado['category_id']);
        } else {
            // Si no solo busca entre todos los productos con lo que se esta buscando
            $url = $uri . str_replace(' ', '_', $search);
        }

        // dd($resultado, $category);

        return view('frontend.productos.search', ['url' => $url, 'resultado' => $resultado, 'category' => $category]);
    }
}
