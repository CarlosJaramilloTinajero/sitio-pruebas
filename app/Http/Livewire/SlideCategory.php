<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use Livewire\Component;

class SlideCategory extends Component
{
    // public $categoryActual;
    // public $categorysId;
    // public $productsCategory;
    // public $categories = [];
    public $category;
    public $categoryId;

    public function mount()
    {
        $this->category = Categories::where('id', $this->categoryId)->first();
    }

    public function render()
    {
        return view('livewire.slide-category');
    }
}
