<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductV3 extends Component
{
    public $product;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.product-v3');
    }
}
