<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilitacaoFuncionarioPosto extends Model
{

    protected $table = 'habilitacao_funcionario_posto';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'funcionario_id', 'posto_id', 'data_habilitacao', 'validade_habilitacao',
    ];
}
