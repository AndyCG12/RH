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
    Schema::table('compras', function (Blueprint $table) {
        
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('set null'); // O 'cascade'
    });
}

public function down()
{
    Schema::table('compras', function (Blueprint $table) {
        $table->dropForeign(['empleado_id']);
        $table->foreign('empleado_id')->references('id')->on('empleados'); // Restaurar sin onDelete
    });
}

};
