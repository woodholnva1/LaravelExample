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
        Schema::create('turistas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre"); // Campo Strings
            $table->string("apellido"); // Campo Strings
            $table->integer("identificacion")->unique(); // Campo Strings
            $table->string("telefono"); // Campo Strings
            $table->foreignId('viaje_id')->references('id')->on('viajes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turistas');
    }
};
