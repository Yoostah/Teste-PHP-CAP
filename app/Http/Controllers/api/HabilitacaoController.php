<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\HabilitacaoFuncionarioPosto;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Carbon;

class HabilitacaoController extends Controller
{
    public function index()
    {
        return HabilitacaoFuncionarioPosto::all();
    }


    public function store(Request $request)
    {
        return HabilitacaoFuncionarioPosto::create($request->only([
            'funcionario_id', 'posto_id', 'data_habilitacao', 'validade_habilitacao'
            ]));
    }


    public function show($id)
    {
        return HabilitacaoFuncionarioPosto::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $habilitacao = HabilitacaoFuncionarioPosto::findOrFail($id);
        $habilitacao->update($request->all());
    }

    public function destroy($id)
    {
        $habilitacao = HabilitacaoFuncionarioPosto::findOrFail($id);
        $habilitacao->delete();
    }

    public function findBrasilianWorkers(){
        $hoje = date("Y-m-d");

        return DB::table('habilitacao_funcionario_posto')
        ->join('funcionario', 'funcionario.id', '=', 'habilitacao_funcionario_posto.funcionario_id')
        ->join('posto_de_trabalho', 'posto_de_trabalho.id', '=', 'habilitacao_funcionario_posto.posto_id')
        ->select('habilitacao_funcionario_posto.*', 'funcionario.*', 'posto_de_trabalho.*')
        ->where('posto_de_trabalho.pais', '=', 'Brasil')
        ->where('habilitacao_funcionario_posto.validade_habilitacao', '>', $hoje)
        ->get();
    }
}
