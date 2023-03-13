<?php

namespace App\Http\Controllers;

use App\Http\Helpers\FiltrosHelper;
use App\Models\categoryJerarqui;
use Illuminate\Http\Request;

class CategoryJerraquiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categoryJerarqui::all();

        $arbol = collect((new FiltrosHelper())->getArbol());


        return view('categories_jerarqui.index', ['categories' => $categories, 'arbol' => $arbol]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categoryJerarqui::all();
        return view('categories_jerarqui.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            // $request->validate([
            //     'name' => 'unique:App\Models\categoryJerarqui, name',
            // ]);

            $category = new categoryJerarqui();

            $category->name = $request->name;
            $category->relation_id = $request->relacion_id != 'null' ? $request->relacion_id : null;
            $category->show_products = $request->show_products;
            $category->busqueda = $request->busqueda;

            $triggersRequest = explode('-', $request->triggers);

            $triggers = '{ "triggers": [ ';

            $i = 0;
            foreach ($triggersRequest as $value) {
                $i++;
                $triggers .= '"' . $value . '"';
                if ($i > 0 && $i < count($triggersRequest)) {
                    $triggers .= ',';
                }
            }
            $triggers .= '] }';

            $category->triger = $triggers;

            $category->save();

            return redirect()->back()->with('success', 'Categoria agregada correctamente');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Ocurrio un arror al agregar la categoria');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = categoryJerarqui::all();
        $category = categoryJerarqui::find($id);
        $category->triger = implode('-', json_decode($category->triger, true)['triggers']);
        return view('categories_jerarqui.edit', ['categories' => $categories, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $category = categoryJerarqui::find($id);

            $category->name = $request->name;
            $category->relation_id = $request->relacion_id != 'null' ? $request->relacion_id : null;
            $category->show_products = $request->show_products;
            $category->busqueda = $request->busqueda;

            $triggersRequest = explode('-', $request->triggers);

            $triggers = '{ "triggers": [ ';

            $i = 0;
            foreach ($triggersRequest as $value) {
                $i++;
                $triggers .= '"' . $value . '"';
                if ($i > 0 && $i < count($triggersRequest)) {
                    $triggers .= ',';
                }
            }
            $triggers .= '] }';

            $category->triger = $triggers;

            $category->save();

            return redirect()->back()->with('success', 'Categoria editada correctamente');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Ocurrio un arror al editar la categoria');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = categoryJerarqui::find($id);
        if ($category->delete()) {
            return redirect()->back()->with('success', 'Categoria eliminada correctamente');
        }
        return redirect()->back()->with('error', 'Ocurrio un arror al eliminar la categoria');
    }
}
