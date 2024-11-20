<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 class add extends Migration
{
    /**
     * Run the migrations.
     */
    Schema::table('incidencias', function (Blueprint $table) {
        // Eliminar la clave foránea existente, si la hay
        $table->dropForeign(['empleado_id']);
        
        // Volver a crear la clave foránea con onDelete('cascade')
        $table->foreign('empleado_id')
              ->references('id')
              ->on('empleados')
              ->onDelete('cascade');
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::table('incidencias', function (Blueprint $table) {
        $table->dropForeign(['empleado_id']);
    });
}
};
