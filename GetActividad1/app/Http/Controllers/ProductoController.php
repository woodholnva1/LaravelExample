<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $producto)
    {
        // Si Existe el Parametro Categoria Filtra por Categoria
        //
        if ($producto->has('categoria')) {
            $categoria = $producto->input('categoria');
            return new ProductoCollection(Producto::where("categoria_id", $categoria)->get());
        } else {
            return new ProductoCollection(Producto::all());
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validadores
        $request->validate();

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
