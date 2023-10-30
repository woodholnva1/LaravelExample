<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Requerimientos de la Categorias
     */
    public function run(): void
    {
        // Insert A DB
        DB::table("categorias")->insert([
            'name' => 'Hamburguesas',
            'icon'  => 'burguer-icon',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table("categorias")->insert([
            'name' => 'pasta',
            'icon'  => 'pasta-icon',
            'created_at' => now(),
            'updated_at'=> now()
        ]);

        DB::table("categorias")->insert([
            'name' => 'pizzas',
            'icon'  => 'pizzas-icon',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
