<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'Hotel Presidente',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Hotel Costa Real',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Hotel Kristoff',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'El paseo',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'Hotel Aladin',
                'created_at' => now(),
                'updated_at'=> now()),
            ];

            DB::table("hoteles")->insert($data);
    }
}
