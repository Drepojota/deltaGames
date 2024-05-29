<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('CARRINHO_ITEM', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('USUARIO_ID');
            $table->unsignedBigInteger('PRODUTO_ID');
            $table->integer('ITEM_QTD');
            $table->timestamps(); // Adiciona created_at e updated_at automaticamente

            // Definindo chaves estrangeiras
            $table->foreign('USUARIO_ID')->references('USUARIO_ID')->on('USUARIO')->onDelete('cascade');
            $table->foreign('PRODUTO_ID')->references('PRODUTO_ID')->on('PRODUTO')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('CARRINHO_ITEM');
    }
};
