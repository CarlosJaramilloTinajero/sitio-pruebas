<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Product;
use App\Models\subcategories;
use Livewire\Component;

class ProductsCategoy extends Component
{

    public $products;
    public $search;
    public $category;
    public $subcategory = null;

    public function mount()
    {
        $this->search = "";
        $this->getProducts();
    }

    public function render()
    {
        if ($this->search == "") {
            $this->getProducts();
        }
        return view('livewire.products-categoy');
    }

    public function ponerSubcategory($id)
    {
        $this->search = "";
        $this->subcategory = subcategories::where('category_id', $this->category->id)->where('id', $id)->first();
        $this->getProducts();
    }

    public function quitarSubcategory()
    {
        if ($this->subcategory != null) {
            $this->subcategory = null;
            $this->search = "";
            $this->getProducts();
        }
    }

    public function searchEvent($search)
    {
        if ($search != "") {
            $this->search = $search;
            $products = Product::where('category_id', $this->category->id);
            $query = $products->newQuery();

            if ($this->subcategory != null) {
                $query->where('subcategory_id', $this->subcategory->id);
            }

            $query->whereRaw("name COLLATE utf8mb4_general_ci LIKE ?", ["%{$this->search}%"]);
            $query->orWhereRaw("sku COLLATE utf8mb4_general_ci LIKE ?", ["%{$this->search}%"]);

            $this->products = $query->get()->take(50);
        }
    }

    public function getProducts()
    {
        if ($this->category != null) {
            $products = Product::where('category_id', $this->category->id);
            $query = $products->newQuery();
            if ($this->subcategory != null) {
                $query->where('subcategory_id', $this->subcategory->id);
            }
            $this->products = $query->get()->take(50);
        }
    }
}
