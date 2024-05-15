<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class allProducts extends Model
{
    use HasFactory; //Essa característica permite que o modelo use uma fábrica para criar novas instâncias do modelo.
    protected $table = "PRODUTO"; //Especifica o nome da tabela de banco de dados associada ao modelo.
    protected $primaryKey = "PRODUTO_ID"; //Especifica a coluna de chave primária da tabela.
}

