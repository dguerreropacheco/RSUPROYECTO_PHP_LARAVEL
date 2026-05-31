<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasColumn('marcas', 'activo')) {
            Schema::table('marcas', function (Blueprint $table) { $table->boolean('activo')->default(true); });
        }
        
        if (!Schema::hasColumn('vehiculos', 'activo')) {
            Schema::table('vehiculos', function (Blueprint $table) { $table->boolean('activo')->default(true); });
        }
        
        if (!Schema::hasColumn('departamentos', 'activo')) {
            Schema::table('departamentos', function (Blueprint $table) { $table->boolean('activo')->default(true); });
        }
        
        if (!Schema::hasColumn('asistencias', 'created_at')) {
            Schema::table('asistencias', function (Blueprint $table) { $table->timestamps(); });
        }
        
        if (!Schema::hasColumn('personal', 'activo')) {
            Schema::table('personal', function (Blueprint $table) { $table->boolean('activo')->default(true); });
        }
        
        if (!Schema::hasColumn('personal', 'tipo_contrato')) {
            Schema::table('personal', function (Blueprint $table) { $table->string('tipo_contrato')->nullable(); });
        }
        
        if (!Schema::hasColumn('grupospersonal', 'estado')) {
            Schema::table('grupospersonal', function (Blueprint $table) { $table->integer('estado')->default(1); });
        }
    }
};