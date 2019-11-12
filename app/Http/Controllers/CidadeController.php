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

    public function update(Request $request, Cidade $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Cidade $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
