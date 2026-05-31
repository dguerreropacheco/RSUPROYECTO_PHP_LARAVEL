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
        Schema::table('marcas', function ($table) {
            $table->boolean('activo')->default(true);
        });
        Schema::table('vehiculos', function ($table) {
            $table->boolean('activo')->default(true);
        });
        Schema::table('departamentos', function ($table) {
            $table->boolean('activo')->default(true);
        });

        Schema::table('asistencias', function ($table) {
            $table->timestamps();
        });

        Schema::table('personal', function ($table) {
            $table->boolean('activo')->default(true);
            $table->string('tipo_contrato')->nullable();
        });

        Schema::table('grupospersonal', function ($table) {
            $table->integer('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('database', function (Blueprint $table) {
            //
        });
    }
};
