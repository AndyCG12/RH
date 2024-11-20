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
        Schema::table('bonos', function (Blueprint $table) {
            //
            $table->foreign('empleado-id')
            ->references('id')
            ->on('empleados')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bonos', function (Blueprint $table) {    
            //
            $table->dropForeign(['empleado_id']);
        });
    }
};
