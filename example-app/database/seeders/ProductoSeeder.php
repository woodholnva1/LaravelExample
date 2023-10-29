<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            array(
                'name' => 'Hamburguesa Crispy',
                'precio'=> 7.5,
                'status'=> true,
                'imagen'=> '0',
                'categoria_id' => 1,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'name' => 'Hamburguesa Papa',
                'precio'=> 8.5,
                'status'=> true,
                'imagen'=> '0',
                'categoria_id' => 1,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'name' => 'Pizza Peperoni',
                'precio'=> 6.5,
                'status'=> false,
                'imagen'=> '0',
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'name' => 'Pizza Alfredo',
                'precio'=> 9.5,
                'status'=> true,
                'imagen'=> '0',
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at'=> now()),
            array(
                'name' => 'Arepa Pollo',
                'precio'=> 11.5,
                'status'=> true,
                'imagen'=> '0',
                'categoria_id' => 3,
                'created_at' => now(),
                'updated_at'=> now())
            ];

            DB::table("productos")->insert($data);
            
    }
}
