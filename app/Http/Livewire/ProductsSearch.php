<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsSearch extends Component
{

    public $products, $productsConst, $search;

    public function mount()
    {
        $this->products = Product::with('categoria')->with('marca')->get();
        $this->productsConst = $this->products;
    }

    public function render()
    {
        if ($this->search != "") {
            $this->products = $this->productsConst->filter(function ($value, $key) {
                //La funcion strpos busca la posicion de una cadena dentro de otra cadena y devuelve false si no se encuentra, entonces !==  lo que hace es comparar el false con lo que esta a la izquierda, y si lo de la izquierda es igual a false retorna false y si no retorna true
                //  la expresión '!==' compara los valores de los operandos que se encuentran a su izquierda y derecha
                //  Si los valores son diferentes, el resultado es true, de lo contrario el resultado es false.

                return (strpos(strtoupper($value->nombre), strtoupper($this->search)) !== false ||
                    strpos(strtoupper($value->sku), strtoupper($this->search)) !== false ||
                    strpos(strtoupper($value->marca_nombre), strtoupper($this->search)) !== false ||
                    strpos(strtoupper($value->categoria->nombre_categoria), strtoupper($this->search)) !== false);
            });
        } else {
            $this->products = $this->productsConst;
        }
        return view('livewire.products-search');
    }
}
