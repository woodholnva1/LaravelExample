<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgregarTuristaRequest;
use App\Http\Requests\BuscarTuristaRequest;
use App\Http\Resources\TuristaCollection;
use App\Models\turistas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TuristasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AgregarTurista(AgregarTuristaRequest $request)
    {
        $data = $request->validated();

        // turistas::created([
        //     "nombre" => $data['nombre'],
        //     "apellido" => $data['apellido'],
        //     "identificacion" => $data['identificacion'],
        //     "telefono" => $data['telefono'],
        //     "viaje_id" => $data['viaje_id'],
        // ]);
        
        //Registrar Turista
        $TuristaNew = new  Turistas();
        $TuristaNew->nombre = $data['nombre'];
        $TuristaNew->apellido = $data['apellido'];
        $TuristaNew->identificacion = $data['identificacion'];
        $TuristaNew->telefono = $data['telefono'];
        $TuristaNew->viaje_id = $data['viaje_id'];
        $TuristaNew->save();

        return [
            'message' => 'Registrado Turista Correctamente'
        ];

        //
    }


    public function BuscarTuristabyIdentificacion(BuscarTuristaRequest $request){

        $data = $request->validated();


        $turista = turistas::where("identificacion", $data['identificacion'])->get();

        if ($turista->isEmpty()) {
            return ['message' => 'No se Encontraron Turistas con esa identificacion'];
        }

        return new TuristaCollection($turista);

    }
    /**
     * Display the specified resource.
     */
    public function show(turistas $turistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, turistas $turistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(turistas $turistas)
    {
        //
    }
}
