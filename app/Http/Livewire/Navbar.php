<?php

namespace App\Http\Livewire;

use App\Http\Helpers\FiltrosHelper;
use App\Models\Categories;
use Livewire\Component;

class Navbar extends Component
{

    public $resultado;
    
    public function mount()
    {
    }
    public function render()
    {
        $categories = Categories::get()->take(12);

        // Categorias para los dropdowns en el navbar
        $categoriesDrops = Categories::where('name', 'LIKE', "%Computo%")->orWhere('name', 'LIKE', "%Oficina y Escolar%")->orWhere('name', "Almacenamiento")->get();

        // La variale responsive es para poder quitar el dropdown de esa categoria dependiendo del tamaño de pantalla del dispositivo
        $categoryResponsive = $categoriesDrops->first();
        $categoryResponsive->reponsive = true;
        $categoriesDrops[0] = $categoryResponsive;

        $arbol = (new FiltrosHelper())->getParents();
        return view('livewire.navbar', ['arbol' => $arbol, 'categories' => $categories, 'categoriesDrops' => $categoriesDrops]);
    }
}
