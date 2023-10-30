<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'Tour playas',
                'sitios_id' => 1,
                'transporte_id' => 1,
                'cantidadTuristas'=> 0,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'tour Maturin',
                'sitios_id' => 3,
                'transporte_id' => 3,
                'cantidadTuristas'=> 20,
                'created_at' => now(),
                'updated_at'=> now())
            ];
            DB::table("viajes")->insert($data);   
    }
}
