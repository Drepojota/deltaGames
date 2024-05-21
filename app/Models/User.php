<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'USUARIO'; // Defina explicitamente o nome da tabela

    protected $fillable = [
        "USUARIO_ID",
        "USUARIO_NOME",
        'USUARIO_EMAIL',
        'USUARIO_SENHA'

    ];

    protected $hidden = [
        'USUARIO_SENHA', // hashing de senha
    ];

    public function setPasswordAttribute($USUARIO_SENHA)
    {
        $this->attributes['USUARIO_SENHA'] = bcrypt($USUARIO_SENHA);
    }

    // Override para username
    public function getAuthIdentifierName()
    {
        return 'USUARIO_EMAIL';
    }

    // Override para senha
    public function getAuthPassword()
    {
        return $this->USUARIO_SENHA;
    }
}