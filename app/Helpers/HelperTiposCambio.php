<?php

namespace App\Helpers;

use App\Models\Extras;
use Illuminate\Support\Facades\View;

class HelperTiposCambio
{


    public function update()
    {
        $tiposCamio = Extras::where('key', 'LIKE', "%TIPOCAMBIO%")->get();
        View::share('tiposCambio', $tiposCamio);
        dd(View::shared('tiposCambio'), 'asdasdasdas');
    }
}
