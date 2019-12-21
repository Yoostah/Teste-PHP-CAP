<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PostoTrabalho;

class PostoController extends Controller
{
    public function index()
    {
        return PostoTrabalho::all();
    }


    public function store(Request $request)
    {
        return PostoTrabalho::create($request->only(['setor','pais', 'nome', 'tipo']));
    }


    public function show($id)
    {
        return PostoTrabalho::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $posto = PostoTrabalho::findOrFail($id);
        $posto->update($request->all());
    }

    public function destroy($id)
    {
        $posto = PostoTrabalho::findOrFail($id);
        $posto->delete();
    }
}
