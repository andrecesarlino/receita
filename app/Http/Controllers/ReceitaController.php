<?php

namespace App\Http\Controllers;

use App\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function index()
    {
        return Receita::all();
    }

    public function show($id)
    {
        return Receita::find($id);
    }

    public function store(Request $request)
    {
        return Receita::create($request->all());
    }

    public function update(Request $request, Receita $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Receita $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
