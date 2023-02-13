<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class InicioV1 extends Component
{
    public $productsModa;

    public function mount()
    {
        $this->productsModa = Product::where('category_id', 3)->get()->take(10);
    }

    public function render()
    {
        return view('livewire.inicio-v1');
    }
}
