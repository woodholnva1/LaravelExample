<?php

namespace App\Http\Resources;

use App\Models\viajes;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TuristaResource extends JsonResource
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
            "nombreCompleto " => $this->nombre ,
            "identificacion "=> $this->identificacion,
            "telefono "=> $this->telefono,
            "viaje"=> viajes::where("id", $this->viaje_id)->get('nombre'),
        ];
    }
}
