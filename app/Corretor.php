<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretor extends Model
{
    // indica o nome da tabela
    protected $table="corretores";

    // determina quais campos do formulário devem ser
    // fornecidos
    protected $fillable = [
        'nome_corretor',
        'creci',
        'fone',
        'email',
        'nome_corretora'
    ];
}
