<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'USUARIO';

    protected $fillable = [
        'USUARIO_NOME', 
        'USUARIO_EMAIL',
        'USUARIO_CPF', 
        'USUARIO_SENHA',
    ];

    protected $hidden = [
        'USUARIO_SENHA', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->USUARIO_SENHA;
    }
    
    public function setUSUARIOSenhaAttribute($value)
    {
        $this->attributes['USUARIO_SENHA'] = bcrypt($value);
    }

    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Produto::class, 'CARRINHO_ITEM', 'USUARIO_ID', 'PRODUTO_ID');
    }
}
