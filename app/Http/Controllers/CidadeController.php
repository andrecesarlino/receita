<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;

class CidadeController extends Controller
{
    public function index()
    {
        return Cidade::all();
    }

    public function show($id)
    {
        return Cidade::find($id);
    }

    public function store(Request $request)
    {
        return Cidade::create($request->all());
    }

    public function update(Request $request, Cidade $cidade)
    {
        $cidade->update($request->all());
        return $cidade;
    }

    public function delete(Cidade $cidade)
    {
        $cidade->delete();
        return response()->json(null, 204);
    }
}
