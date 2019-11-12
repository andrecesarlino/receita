<?php

namespace App\Http\Controllers;
use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        return Pessoa::all();
    }

    public function show($id)
    {
        return Pessoa::find($id);
    }

    public function store(Request $request)
    {
        return Pessoa::create($request->all());
    }

    public function update(Request $request, Pessoa $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Pessoa $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
