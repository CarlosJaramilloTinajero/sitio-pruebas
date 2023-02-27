<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\subcategories;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsCategoy extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

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
            $productos = $this->getProducts();
        } else {
            $productos = $this->searchB($this->search);
        }
        return view('livewire.products-categoy', ['productos' => $productos]);
    }

    public function ponerSubcategory($id)
    {
        $this->search = "";
        $this->subcategory = subcategories::where('category_id', $this->category->id)->where('id', $id)->first();
        // $this->getProducts();
    }

    public function quitarSubcategory()
    {
        if ($this->subcategory != null) {
            $this->subcategory = null;
            $this->search = "";
            // $this->getProducts();
        }
    }

    public function searchEvent()
    {
        $this->render();
    }

    public function searchB($search)
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

            return $query->paginate(20);
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
            // $this->products = $query->get()->take(50);
            return $query->paginate(20);
        }
    }
}
