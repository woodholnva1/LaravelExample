<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turistas extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "apellido",
        "identificacion",
        "telefono",
        "viaje_id"
    ];

}
