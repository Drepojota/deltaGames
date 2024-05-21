<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'USUARIO';

    protected $fillable = [
        'USUARIO_NOME', 
        'USUARIO_EMAIL', 
        'USUARIO_SENHA',
    ];

    protected $hidden = [
        'USUARIO_SENHA', 
        'remember_token',
    ];

}