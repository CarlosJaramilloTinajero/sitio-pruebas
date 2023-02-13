<?php

namespace App\Http\Controllers;

use App\Http\Services\HTTPGuzzleService;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Product;

class apiExelPruebaController extends Controller
{


    public function getMarcas()
    {

        $httpGuzzle = new HTTPGuzzleService(config('services.exel.token'), 'json', 'https://apiexel.xentra.com.mx');

        $datos = $httpGuzzle->getArray($httpGuzzle->peticionHTTP('GET', 'marcas', []));

        dd($datos);

        foreach ($datos->datos as $dato) {
            $marca = new Marca();
            $marca->nombre = $dato->nombre;
            $marca->id_marca = $dato->id;
            $marca->save();
        }

        dd(Marca::all());
    }

    public function getCategorias()
    {

        $httpGuzzle = new HTTPGuzzleService(config('services.exel.token'), 'json', 'https://apiexel.xentra.com.mx');

        $datos = $httpGuzzle->getArray($httpGuzzle->peticionHTTP('GET', 'categorias', []));

        dd($datos);

        try {
            foreach ($datos->datos as $dato) {
                $categoria = new Categoria();
                $categoria->id_categoria = $dato->id_categoria;
                $categoria->nombre_categoria = $dato->nombre_categoria;
                $categoria->save();
            }
        } catch (\Exception $th) {
            echo $th;
        }
        dd(Categoria::all());
    }

    public function getProductos()
    {

        $httpGuzzle = new HTTPGuzzleService(config('services.exel.token'), 'json', 'https://apiexel.xentra.com.mx');

        $datos = $httpGuzzle->getArray($httpGuzzle->peticionHTTP('GET', 'productos', []));

        $datosColeccion = collect($datos->datos);

        $chunks = $datosColeccion->chunk(200);

        dd($chunks->toArray());

        try {

            foreach ($chunks as $chunk) {
                foreach ($chunk as $dato) {
                    $producto = new Product();
                    $producto->sku = $dato->sku;
                    $producto->nombre = $dato->nombre;
                    $producto->stock = $dato->stock;
                    $producto->precio = $dato->precio;
                    $producto->precio_oferta = $dato->precio_oferta;
                    $producto->precio_sin_oferta = $dato->precio_sin_oferta;
                    $producto->oferta = $dato->oferta;
                    $producto->moneda = $dato->moneda;
                    $producto->marca_id = $dato->marca_id;
                    $producto->marca_nombre = $dato->marca_nombre;
                    $producto->familia_id = $dato->familia_id;
                    $producto->familia_nombre = $dato->familia_nombre;
                    $producto->subcategoria_id = $dato->subcategoria_id;
                    $producto->categoria_id = $dato->categoria_id;
                    $producto->save();
                }
            }
        } catch (\Exception $th) {
            echo $th;
        }

        dd(Product::all());
    }
}
