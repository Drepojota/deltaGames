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
        Schema::create('USUARIO', function (Blueprint $table) {
            $table->id();
            $table->string('USUARIO_NOME');
            $table->string('USUARIO_EMAIL')->unique();
            $table->string('USUARIO_SENHA');
            $table->string('USUARIO_CPF')->nullable(); // Torna o campo USUARIO_CPF opcional
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('USUARIO_EMAIL')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('USUARIO');
        Schema::dropIfExists('password_reset_tokens');
    }
};