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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8);
            $table->string('nombres', 100);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 20);
            $table->string('email', 150);
            $table->text('direccion')->nullable();
            $table->string('licencia_conducir', 20);
            $table->date('fecha_vencimiento_licencia');
            $table->string('foto', 255);
            $table->unsignedBigInteger('funcion_id');
            $table->string('clave', 255);
            
            $table->time('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
