<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";
    public $timestamps = false;

    public function Categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function Estoque(): BelongsTo
    {
        return $this->belongsTo(Estoque::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function Imagem(): HasMany
    {
        return $this->hasMany(Imagem::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    public function Carrinho()
    {
        return $this->belongsToMany(Carrinho::class, 'CARRINHO_ITEM', 'USUARIO_ID', 'PRODUTO_ID');
    }

    public function User()
    {
        return $this->belongsToMany(User::class, 'CARRINHO_ITEM', 'PRODUTO_ID', 'USUARIO_ID');
    }
}
