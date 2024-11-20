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
        Schema::table('nominas', function (Blueprint $table) {
            $table->unsignedBigInteger('razon_social_id')->nullable()->after('id'); // Agrega la columna
            $table->foreign('razon_social_id')->references('id')->on('razones_sociales')->onDelete('set null'); // Define la clave foránea
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nominas', function (Blueprint $table) {
            //
        });
    }
};
