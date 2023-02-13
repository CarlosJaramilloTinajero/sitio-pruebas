<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use Livewire\Component;

class MenuCategorias extends Component
{
    public $categorias;

    public function mount()
    {
        $this->categorias = Categories::with('products')->get()->take(10);
    }

    public function render()
    {

        return view('livewire.menu-categorias');
    }
}
