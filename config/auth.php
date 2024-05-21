<?php

return [


    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],



    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
            'identifier' => 'USUARIO_EMAIL', // Chave de identificação do usuário
            'password' => 'USUARIO_SENHA',   // Chave de senha do usuário
        ],
    ],


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
            'table' => 'usuario', // Certifique-se de que a tabela está correta
        ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
