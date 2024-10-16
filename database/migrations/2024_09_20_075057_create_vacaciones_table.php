<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /*  public function up()
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->enum('estado', ['solicitada', 'aprobada', 'rechazada', 'cancelada']);
            $table->integer('dias_totales');
            $table->timestamps();
        });
    } */
    public function up()
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->enum('estado', ['activo', 'pendiente', 'cancelado', 'tomado']);
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('vacaciones');
    }
};
