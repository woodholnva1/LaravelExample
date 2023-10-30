<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   

        // Tabla viajes disponibles
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre"); // Campo Strings
            $table->foreignId('sitios_id')->references('id')->on('sitios')->onDelete('cascade');
            $table->foreignId('transporte_id')->references('id')->on('transportes')->onDelete('cascade');
            $table->integer("cantidadTuristas"); // Campo Strings
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
//php artisan migrate --path=/database/migrations/2023_10_29_202040_create_viajes_table.php


