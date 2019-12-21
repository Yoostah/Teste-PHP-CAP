<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostoTrabalho extends Model
{

    protected $table = 'posto_de_trabalho';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'setor', 'pais', 'nome', 'tipo',
    ];
}


