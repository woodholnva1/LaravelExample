<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'bus 1',
                'grupo_id' => 1,
                'hora' => '12:00AM',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'bus 2',
                'grupo_id' => 2,
                'hora' => '04:00PM',
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'nombre' => 'bus 3',
                'grupo_id' => 1,
                'hora' => '09:00AM',
                'created_at' => now(),
                'updated_at'=> now())
            ];
            DB::table("transportes")->insert($data);   
    }
}
