<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViajesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            "id"=> $this->id,
            "nombre"=> $this->nombre,
            "sitios_id"=> $this->sitios_id,
            "transportes_id"=> $this->sitios_id,
            "Cantidad_Turistas"=> $this->cantidadTuristas,
        ];
    }
}
