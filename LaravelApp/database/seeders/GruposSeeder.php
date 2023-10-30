<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'Grupo 1',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Grupo 2',
                'created_at' => now(),
                'updated_at'=> now())
            ];
            DB::table("grupos")->insert($data);     
    }
}
