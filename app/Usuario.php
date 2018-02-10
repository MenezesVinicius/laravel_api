<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'login', 'nome', 'cpf', 'email', 'endereco', 'senha'
    ];
    protected $hidden = [
        'senha',
    ];
    public $timestamps = false;
}
