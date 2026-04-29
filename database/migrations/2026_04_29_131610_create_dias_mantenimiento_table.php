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
        Schema::create('dias_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('horario_mantenimiento_id');
            $table->date('fecha');
            $table->text('observacion')->nullable();
            $table->string('imagen', 255);
            
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias_mantenimiento');
    }
};
