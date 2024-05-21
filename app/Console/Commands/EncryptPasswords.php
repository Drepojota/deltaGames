<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class EncryptPasswords extends Command
{
    protected $signature = 'encrypt:passwords';
    protected $description = 'Encrypt all user passwords using Bcrypt';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $USUARIO = User::all();

        foreach ($USUARIO as $USUARIO) {
            if (!\Illuminate\Support\Facades\Hash::needsRehash($USUARIO->USUARIO_SENHA)) {
                continue;
            }

            $USUARIO->USUARIO_SENHA = bcrypt($USUARIO->USUARIO_SENHA);
            $USUARIO->save();
        }

        $this->info('All passwords have been encrypted.');
    }
}