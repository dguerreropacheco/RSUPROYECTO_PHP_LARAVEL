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
        Schema::create('cambios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programacion_id');
            $table->string('valor_anterior', 255);
            $table->string('valor_nuevo', 255);
            $table->string('valor_anterior_nombre', 255);
            $table->string('valor_nuevo_nombre', 255);
            $table->unsignedBigInteger('motivo_id');
            $table->text('notas')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cambios');
    }
};
