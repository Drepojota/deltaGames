<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";
    public $timestamps = false;

    public function Categoria(){
        return $this->belongsTo(Categoria::class,'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function Estoque(){
        return $this->belongsTo(Estoque::class,'PRODUTO_ID', 'PRODUTO_ID');
    }
    
    public function fotos(){
        return $this-> hasMany(Imagem::class, 'PRODUTO_ID','PRODUTO_ID');
    }
}
