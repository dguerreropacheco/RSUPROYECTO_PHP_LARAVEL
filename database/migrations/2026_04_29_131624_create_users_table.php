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
        Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('email', 255);
                $table->time('email_verified_at')->nullable();
                $table->string('password', 255);
                $table->text('two_factor_secret')->nullable();
                $table->text('two_factor_recovery_codes')->nullable();
                $table->time('two_factor_confirmed_at')->nullable();
                $table->string('remember_token', 100);
                $table->unsignedBigInteger('current_team_id');
                $table->string('profile_photo_path', 2048);
                
                
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
