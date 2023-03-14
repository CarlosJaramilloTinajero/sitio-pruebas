<?php

namespace App\Http\Helpers;

use App\Models\categoryJerarqui;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\ErrorHandler\Collecting;

class FiltrosHelper
{

    public $arbol = [];

    function __construct()
    {
        // $this->arbol = [
        //     'Desktop y Portátiles' => [
        //         'Tablet' => [
        //             'Tablet' => [
        //                 'iPad',
        //                 'samsung',
        //                 'lenovo'
        //             ],
        //             'Tablet Grafica'
        //         ],

        //         'Laptop' => [
        //             'intel',
        //             'amd',
        //             'laptop gamer'
        //         ]
        //     ],

        //     'Computo y Hardware' => [
        //         'componente' => [
        //             'procesador' => [
        //                 'procesador para pc',
        //                 'procesador para servidor'
        //             ]
        //         ]
        //     ]
        // ]; 

        $this->arbol = $this->getArbol();
    }

    // retorna los padres que son los de mayor jerarquia en la BD
    public function getParents()
    {
        // los padres son los que no tienen ninguna relacion con la llave foranea 'relation_id'
        return categoryJerarqui::where('relation_id', null)->get();
    }

    // retorna un array con los ids de las categorias en forma arbol
    public function getArbol()
    {
        // Obtenemos los padres
        $padres = $this->getParents();
        // Creamos el json para el arbol de jerarquias de categorias
        $arbolJson = "{";
        $i = 0;
        // Hacemos la iteracion de los padres
        foreach ($padres as $value) {
            $i++;
            // Agregamos al json el id del padres
            $arbolJson .= '"' . $value->id . '"';

            //si el padre tiene hijos los agregamos con la funcion getChilds la cual retorna un string con los id's de los hijos agregados jerarquicamente 
            $arbolJson .= ":{";
            $arbolJson .= $this->getChilds($value, '');
            $arbolJson .= "}";

            // Si el contador es mayor a 0 y menor a la cantidad de padres agregamos una coma para separar el json
            if ($i > 0 && $i < count($padres)) {
                $arbolJson .= ",";
            }
        }

        // Cerramos el json del arbol
        $arbolJson .= "}";

        return json_decode($arbolJson, true);
    }

    // retorna los ids de los hijos de una categoria
    public function getChilds($node, $aux)
    {

        // Si el node que es un modelo categoryJerarqui tiene hijos
        if ($node->getChilds) {
            $i = 0;

            // Por cada hijo que tenga el modelo se concaena al parametro aux 
            foreach ($node->getChilds as $value) {
                $i++;
                // se agrega el id del modelo al json
                $aux .=  '"' . $value->id .  '"';

                $aux .= ":{";
                // se vuelve a llamar para obtener los id's en formato json y concatenarlos al parametro aux, si no tiene hijos se obtiene un string vacio
                $aux .= $this->getChilds($value, '');
                $aux .= "}";
                if ($i > 0 && $i < count($node->getChilds)) {
                    $aux .= ",";
                }
            }
        }

        // si el modelo ya no tiene hijos entonces retornamos el aux
        return $aux;
    }

    // retorna un array con los nombres de las categorias en forma arbol
    public function getArbolName()
    {
        // Obtenemos los padres
        $padres = $this->getParents();
        // Creamos el json para el arbol de jerarquias de categorias
        $arbolJson = "{";
        $i = 0;
        // Hacemos la iteracion de los padres
        foreach ($padres as $value) {
            $i++;
            // Agregamos al json el id del padres
            $arbolJson .= '"' . categoryJerarqui::find($value->id)->name . '"';

            //si el padre tiene hijos los agregamos con la funcion getChilds la cual retorna un string con los id's de los hijos agregados jerarquicamente 
            $arbolJson .= ":{";
            $arbolJson .= $this->getChildsName($value, '');
            $arbolJson .= "}";

            // Si el contador es mayor a 0 y menor a la cantidad de padres agregamos una coma para separar el json
            if ($i > 0 && $i < count($padres)) {
                $arbolJson .= ",";
            }
        }

        // Cerramos el json del arbol
        $arbolJson .= "}";

        return json_decode($arbolJson, true);
    }

    // retorna los nombres de los hijos de una categoria
    public function getChildsName($node, $aux)
    {
        // Si el node que es un modelo categoryJerarqui tiene hijos
        if ($node->getChilds) {
            $i = 0;

            // Por cada hijo que tenga el modelo se concaena al parametro aux 
            foreach ($node->getChilds as $value) {
                $i++;
                // se agrega el id del modelo al json
                $aux .=  '"' . categoryJerarqui::find($value->id)->name .  '"';

                $aux .= ":{";
                // se vuelve a llamar para obtener los id's en formato json y concatenarlos al parametro aux, si no tiene hijos se obtiene un string vacio
                $aux .= $this->getChildsName($value, '');
                $aux .= "}";
                if ($i > 0 && $i < count($node->getChilds)) {
                    $aux .= ",";
                }
            }
        }

        // si el modelo ya no tiene hijos entonces retornamos el aux
        return $aux;
    }

    // retorna los resultados de la busqueda, si no encuentra nada retorna un nulo
    public function search($palabra)
    {

        $path =  $this->buscar($palabra);

        if ($path != "no encontrado") {
            $pathSplice = explode(' > ', $path);
            $pathSpliceIds = [];
            $pathSpliceIdsData = [];

            foreach ($pathSplice as $key => $value) {

                $pathSplice[$key] = explode(" ", $pathSplice[$key]);
                $pathSplice[$key] = implode("_", $pathSplice[$key]);

                $categoryJerarqui = categoryJerarqui::with('getChilds')->where('name', $value)->first();
                $pathSpliceIds[$categoryJerarqui->id] = $pathSplice[$key];

                $pathSpliceIdsData[$categoryJerarqui->id] = [
                    'url' => $pathSplice[$key],
                    'name' => $categoryJerarqui->name,
                    'search' => $categoryJerarqui->busqueda,
                    'category' => $categoryJerarqui
                ];
            }

            $categoryName = str_replace('_', ' ', $pathSplice[count($pathSplice) - 1]);

            if ($category = categoryJerarqui::where('name', $categoryName)->first()) {
                return ['path' => $path, 'pathSplice' => $pathSpliceIds, 'pathSpliceData' => $pathSpliceIdsData, 'categoryName' => $categoryName, 'category_id' => $category->id];
            }

            return null;
        }

        return null;
    }

    // esta funcion es una funcion recursiva, la cual busca la primer coincidencia que haya enconttrado con el arbol de categorias con la palabra dada en el parametro palabra
    public function buscar($palabra, $nodoActual = null, $raiz = true)
    {
        // Si el nodo actual es nulo entoces el nodo actual es la raiz
        if (!$nodoActual) {
            $nodoActual = $this->arbol;
        }

        // $palabrasClave = explode(' ', $palabra);
        $palabra =  $palabra;
        $resultado = [];

        // foreach ($palabrasClave as $palabra) {
        $encontrado = false;

        // iteracion del nodo actual con la clave y el valor el cual puede ser un array
        foreach ($nodoActual as $clave => $valor) {

            // si el se ecuentra la palabra dentro de la clave de la iteracion se cierra el ciclo y se guarda el resultado
            if ($this->exitist($clave, $palabra)) {
                $resultado[] = categoryJerarqui::find($clave)->name;
                $encontrado = true;
                break;
            }

            // Si el valor actual es un array se manda a llamar a la misma funcion dando como segundo parametro el nuevo array a iterar y se guarda el resultado
            if (count($valor) > 0) {
                $subResultado = $this->buscar($palabra, $valor, false);

                // si el resultado no es nulo significa que se encontro la palabra dentro del subarray
                if ($subResultado) {
                    $resultado[] = categoryJerarqui::find($clave)->name . ' > ' . $subResultado;
                    $encontrado = true;
                    break;
                }
            }
        }

        // si el resultado no se encuentra y la funcion tiene como parametro a la variable raiz como true se imprime el resultado de no encontrado
        if (!$encontrado && $raiz) {
            $resultado[] = 'no encontrado';
        }
        // }

        // se retorna el resultado, si el arreglo es nulo entonces retorna un string vacio
        return implode(' > ', $resultado);
    }

    // retorna true si la palabra se encuentra dentro del array de triger del modelo categoryJerarqui, si no retorna false
    public function exitist($category, $palabra): bool
    {
        // buscamos la categoryJerarqui con el id dado como primer parametro
        $category = categoryJerarqui::find($category);

        // si el modelo no tiene al atributo triger como null significa que si tiene palabras clave para buscar 
        // if ($category->triger != null && $category->show_products == 1) {
        if ($category->triger != null) {

            // convertimos los triger a array
            $trigers = json_decode($category->triger, true);

            foreach ($trigers['triggers'] as $triger) {

                // si se encuentra la palabra dentro del triger
                // if (stripos(strtoupper($triger), strtoupper($palabra)) !== false) {
                if (strtoupper($triger) == strtoupper($palabra)) {
                    // dd($triger);
                    return true;
                }
            }
        }
        return false;
    }
}
