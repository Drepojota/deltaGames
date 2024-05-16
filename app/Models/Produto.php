<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class produto extends Model
{
    use HasFactory; //Essa característica permite que o modelo use uma fábrica para criar novas instâncias do modelo.
    protected $table = "PRODUTO"; //Especifica o nome da tabela de banco de dados associada ao modelo.
    protected $primaryKey = "PRODUTO_ID"; //Especifica a coluna de chave primária da tabela.
    public $timestamps = false; //Isso indica que o modelo não usa carimbos de data/hora (colunas created_at e updated_at).

    public function Categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class,'CATEGORIA_ID', 'CATEGORIA_ID'); //Isso define uma relação de pertencimento com o modelo, onde a chave estrangeira está nas tabelas 
    }

    public function Estoque(){
        return $this->belongsTo(Estoque::class,'PRODUTO_ID', 'PRODUTO_ID'); // Isso define uma relação de pertencimento com o modelo, onde a chave estrangeira está nas tabelas e ."Estoque" "PRODUTO_ID" "produto" "estoque"
    }
    
    public function Imagem(){
        return $this-> hasMany(Imagem::class, 'PRODUTO_ID','PRODUTO_ID'); //  Isso define uma relação has-many com o modelo, onde a chave estrangeira está na mesa."Imagem" "PRODUTO_ID" "imagem"
    }
}

//Em resumo, esse modelo representa uma entidade de produto que pertence a uma categoria e a um inventário (estoque) e tem várias imagens associadas a ela.
