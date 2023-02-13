<?php

namespace App\Http\Services\APIS\Exel;


class ExelHelper extends ExelConection
{
    public function __construct()
    {
        parent::__construct();
    }

    // Este metodo sirve para no hacer el mismo codigo de iteracion en muchas partes del codigo 
    //Este metodo recibe como primer parametro el array a iterar y como segundo parametro la funcion que se va a ejecuar por cada iteracion
    // la cual recibe como parametro el dato de cada iteracion 
    public function foreachDatos($datos, $function)
    {
        foreach ($datos as $dato) {
            $function($dato);
        }
    }
}
