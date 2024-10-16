<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRazonesSocialesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('razones_sociales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('rfc', 13); // RFC con límite de 13 caracteres
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('razones_sociales');
    }
};
