<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class MarcasDropdown extends Component
{

    public $marcas;

    public function mount()
    {
        $this->marcas = Brand::with('products')->get()->take(10);
    }

    public function render()
    {
        return view('livewire.marcas-dropdown');
    }
}
