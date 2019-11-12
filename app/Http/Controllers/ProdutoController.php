<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function show($id)
    {
        return Produto::find($id);
    }

    public function store(Request $request)
    {
        return Produto::create($request->all());
    }

    public function update(Request $request, Produto $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Produto $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
