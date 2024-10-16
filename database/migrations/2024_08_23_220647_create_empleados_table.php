<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellidoP', 100);
            $table->string('apellidoM', 100);
            $table->string('email', 100)->unique();
            $table->string('telefono', 100)->unique();
            $table->date('fecha_nacimiento');
            $table->date('fecha_contratacion');
            /* $table->string('puesto', 100); */
            $table->string('imagen')->nullable();
            $table->foreignId('departamento_id')->nullable()->constrained('departamentos')->onDelete('set null');
            $table->foreignId('puesto_id')->nullable()->constrained('puestos')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
