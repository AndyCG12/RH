<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('nominas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('empleado_id')->constrained()->onDelete('cascade');
        $table->foreignId('puesto_id')->constrained()->onDelete('cascade');
        $table->decimal('salario', 10, 2); // Define la cantidad a pagar
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominas');
    }
};
