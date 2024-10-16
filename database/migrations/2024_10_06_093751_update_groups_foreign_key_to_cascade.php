<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            // Elimina la restricción existente
            $table->dropForeign(['project_id']);

            // Agrega la nueva restricción con eliminación en cascada
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            // Revierte los cambios
            $table->dropForeign(['project_id']);

            $table->foreign('project_id')
                ->references('id')
                ->on('projects');
        });
    }
};
