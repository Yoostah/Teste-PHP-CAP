<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        return Funcionario::all();
    }


    public function store(Request $request)
    {
        return Funcionario::create($request->only(['nome','data_de_nascimento', 'city', 'telefone']));
    }


    public function show($id)
    {
        return Funcionario::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
    }
}
