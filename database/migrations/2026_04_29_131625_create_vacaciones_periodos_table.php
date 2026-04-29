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
        Schema::create('vacaciones_periodos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacaciones_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('estado')->nullable();
            $table->text('observaciones')->nullable();
            
            $table->time('deleted_at')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones_periodos');
    }
};
