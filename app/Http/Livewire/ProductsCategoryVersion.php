<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsCategoryVersion extends Component
{

    public $products, $category_id;

    public function mount()
    {
        $this->products = Product::where('category_id', $this->category_id)->get()->take(10);
        // dd($this->products);
    }

    public function render()
    {
        return view('livewire.products-category-version');
    }
}
