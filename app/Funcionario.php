<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    protected $table = 'funcionario';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'nome', 'data_de_nascimento', 'city', 'telefone',
    ];

}
