<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;
    protected $table = "CARRINHO_ITEM";
    protected $Key = "IMAGEM_ID";
    protected $foreignKey = "PRODUTO_ID";
}
