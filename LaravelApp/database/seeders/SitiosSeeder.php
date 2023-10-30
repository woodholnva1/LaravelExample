<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'Playa Monagas',
                'precio' => 500,
                'hoteles_id' => 1,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Playa Maturin',
                'precio' => 150,
                'hoteles_id' => 1,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Playa Maturin',
                'precio' => 50,
                'hoteles_id' => 3,
                'created_at' => now(),
                'updated_at'=> now())
            ];
            DB::table("sitios")->insert($data);     
    }
}
