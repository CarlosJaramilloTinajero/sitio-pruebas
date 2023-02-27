<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class InicioV1 extends Component
{
    public $productsModa;

    public function mount()
    {
        // dd(view()->shared('varGlobal'));
        $this->productsModa = Product::where('category_id', 3)->get()->take(10);
    }

    public function render()
    {
        return view('livewire.inicio-v1');
    }
}
