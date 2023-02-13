<?php

namespace App\Http\Services\APIS\Exel;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductSupplier;
use App\Models\subcategories;
use App\Models\Warehouse;

class ExelService extends ExelConection
{
    public $exelHelper;
    public function __construct()
    {
        parent::__construct();
        $this->exelHelper = new ExelHelper();
    }



    // ******************************Comandos***********************
    public function getProducts($bar)
    {
        $response = $this->methosGet('/productos');
        $bar = $bar->createProgressBar(count($response['datos']));
        $bar->start();
        $productsAgregados = [];
        $productSuppliersAgregados = [];

        foreach ($response['datos'] as $dato) {
            if ($dato['precio'] > 0) {
                if (!$product = Product::where('sku', trim($dato['sku']))->first()) {
                    if (!$brand = Brand::where('name', trim($dato['marca_nombre']))->first()) {
                        $brand = new Brand();
                        $brand->name = trim($dato['marca_nombre']);
                        $brand->save();
                    }
                    if (!$category = Categories::where('name', trim($dato['categoria_nombre']))->first()) {
                        $category = new Categories();
                        $category->name = trim($dato['categoria_nombre']);
                        $category->save();
                    }
                    if (!$subcategory = subcategories::where('name', trim($dato['subcategoria_nombre']))->first()) {
                        $subcategory = new subcategories();
                        $subcategory->name = trim($dato['subcategoria_nombre']);
                        $subcategory->category_id = $category->id;
                        $subcategory->save();
                    }
                    $product = new Product();
                    $product->sku = trim($dato['sku']);
                    $product->name = $dato['nombre'];
                    $product->brand_id = $brand->id;
                    $product->category_id = $category->id;
                    $product->subcategory_id = $subcategory->id;
                    $product->save();
                    $productsAgregados[count($productsAgregados)] = $product->sku;
                }

                if ($product) {
                    if (!$productSupplier = ProductSupplier::where('product_id', $product->id)->where('clave_proveedor', trim($dato['referencia']))->first()) {
                        $productSupplier = new ProductSupplier();
                        $productSupplier->clave_proveedor = trim($dato['referencia']);
                        $productSupplier->product_id = $product->id;
                        $productSupplier->supplier_id = 1;
                    }

                    if ($productSupplier->price != $dato['precio'] || $productSupplier->currency != $dato['moneda']) {
                        $productSupplier->price = $dato['precio'];
                        $productSupplier->currency = $dato['moneda'];
                        $productSupplier->save();
                        $productSuppliersAgregados[count($productSuppliersAgregados)] = $productSupplier->id;
                    }
                }
            }
            $bar->advance();
        }

        $bar->finish();
        dd('', '[Productos agregados]: ', count($productsAgregados), '', '[Productos Suppliers agregados]: ', count($productSuppliersAgregados));
    }

    public function getWarehouses()
    {
        $response = $this->methosGet('/almacenes');
        $almacenesAgregados = [];

        foreach ($response['datos'] as $dato) {
            if (!$warehouse = Warehouse::where('clave', trim($dato['clave']))->first()) {
                $warehouse = new Warehouse();
                $warehouse->clave = trim($dato['clave']);
                $warehouse->name = $dato['nombre'];
                $warehouse->state = isset($dato['direccion']['estado']) ? $dato['direccion']['estado'] : '(.)';
                $warehouse->town = isset($dato['direccion']['ciudad']) ? $dato['direccion']['ciudad'] : '(.)';
                $warehouse->supplier_id = 1;
                $warehouse->save();
                $almacenesAgregados[count($almacenesAgregados)] = $warehouse;
            }
        }

        dd('', '[Almacenes agregados]', $almacenesAgregados);
    }

    public function getSizeProducts($bar)
    {
        $response = $this->methosGet('/productos_medidas');
        $bar = $bar->createProgressBar(count($response['datos']));
        $bar->start();
        $productsCambiados = 0;

        foreach ($response['datos'] as $dato) {
            if ($product = Product::where('sku', trim($dato['sku']))->first()) {
                $peso = isset($dato['peso']) ? $dato['peso'] : 0;
                $largo = isset($dato['largo']) ? $dato['largo'] : 0;
                $ancho = isset($dato['ancho']) ? $dato['ancho'] : 0;
                $altura = isset($dato['altura']) ? $dato['altura'] : 0;

                $sizeDato = ($peso + $largo + $ancho + $altura);
                $sizeProduct = ($product->peso + $product->largo + $product->ancho + $product->alto);

                // Si la suma de los tamaños del producto es menor o igual a cero entonces el esd se modifica a uno si este es diferente de uno
                if ($sizeDato <= 0 && $product->esd != 1) {
                    $product->esd = 1;
                    $product->save();
                    $productsCambiados++;
                }

                // Si el la suma de los tamaños del producto encontrado es diferente al tamaño recibido por la api se modifica
                if ($sizeProduct != $sizeDato && $sizeDato > 0) {
                    $product->peso = $dato['peso'];
                    $product->largo = $dato['largo'];
                    $product->ancho = $dato['ancho'];
                    $product->alto = $dato['altura'];
                    $product->esd = 0;
                    $product->save();
                    $productsCambiados++;
                }
            }
            $bar->advance();
        }
        $bar->finish();
        dd('[Productos cambiados]', $productsCambiados);
    }

    public function getStockPrice($bar)
    {
        $response = $this->methosGet('/stocks_precios');
        $bar = $bar->createProgressBar(count($response['datos']));
        $bar->start();
        $use = [
            'i' => 0,
            'bar' => $bar
        ];
        // Utilizamos el metodo foreachDatos del helper de exel el cual recibe como primer argumento el array de datos a iterar y como segundo argumento la funcion a ejecutar por cada iteracion
        $this->exelHelper->foreachDatos($response['datos'], function ($dato) use ($use) {
            if ($productSupplier = ProductSupplier::where('clave_proveedor', trim($dato['referencia']))->where('supplier_id', 1)->first()) {
                $values = [];
                foreach ($dato['almacenes'] as $warehouse) {
                    if ($almacen = Warehouse::where('clave', $warehouse['almacen_clave'])->where('supplier_id', 1)->first()) {
                        $values[$almacen->id] = ['stock' => $warehouse['stock']];
                    }
                }
                // dd($dato, $productSupplier->toArray(), $values);
                if ($productSupplier->price != $dato['precio'] || $productSupplier->currency != $dato['moneda']) {
                    $productSupplier->price = $dato['precio'];
                    $productSupplier->currency = $dato['moneda'];
                    $productSupplier->save();
                }
                $productSupplier->warehouses()->sync($values);
                $use['i'] += count($values);
            }
            $use['bar']->advance();
        });

        $bar->finish();

        dd('[Inventories agregados]: ', $use['i']);

        // collect($response['datos'])->map(function ($value){
        //     dd($value);
        // });
    }

    public function getImages($bar)
    {
        $response = $this->methosGet('/imagenes');
        $bar = $bar->createProgressBar(count($response['DATA']));
        $bar->start();
        $use = [
            'i' => 0,
            'bar' => $bar
        ];
        $this->exelHelper->foreachDatos($response['DATA'], function ($dato) use ($use) {
            if ($product = Product::where('sku', trim($dato['sku']))->first()) {
                if ($product->img_path == null) {
                    $product->img_path = isset($dato['imagenes'][0]) ? $dato['imagenes'][0] : null;
                    $product->save();
                }
            }
            // if(count($dato['imagenes']) > 1){
            //     dd($dato);
            // }
            $use['bar']->advance();
        });
        $bar->finish();
    }
}
