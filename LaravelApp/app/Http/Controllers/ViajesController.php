<?php

namespace App\Http\Controllers;

use App\Http\Resources\TuristaCollection;
use App\Http\Resources\ViajesCollection;
use App\Models\sitios;
use App\Models\transportes;
use App\Models\turistas;
use App\Models\viajes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener Viajes Disponibles
        return new ViajesCollection(viajes::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ViajesById(Request $request)
    {
        //
        if ($request->has('idViaje')) {
            $categoria = $request->input('idViaje');

            $viajes = viajes::where("id", $categoria)->get();

            if ($viajes->isEmpty()) {
                return ['message' => 'No se Encontraron Viajes'];
            }

            return new ViajesCollection($viajes);
        } else {
            return ['message' => 'Debe Indicar el Parametro de Busqueda'];

        }
    }


    public function GetDetalleViajeTuristas()
    {

        $ArrayResponse = array();
        $viajes = viajes::all();

        foreach ($viajes as $valor) {

            $object = new \stdClass(); // Objeto Vacio PHP

            $object->nombreViaje = $valor->nombre;
            $object->SitosAvisitar = sitios::where('id', $valor->sitios_id)->get(['nombre', 'precio']);
            $object->Transporte = transportes::where('id', $valor->transporte_id)->get(['nombre', 'hora']);
            $object->Turistas = turistas::where('viaje_id', $valor->id)->get(['nombre', 'identificacion','telefono']);
            $object->CantidadTuristas = $valor->cantidadTuristas;
            array_push($ArrayResponse, $object);
        }
        return $ArrayResponse;
    }

    /**
     * Display the specified resource.
     */
    public function show(viajes $viajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, viajes $viajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(viajes $viajes)
    {
        //
    }
}
