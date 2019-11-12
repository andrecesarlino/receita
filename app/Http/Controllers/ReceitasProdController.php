<?php

namespace App\Http\Controllers;

use App\ReceitasProd;
use Illuminate\Http\Request;

class ReceitasProdController extends Controller
{
    public function index()
    {
        return ReceitasProd::all();
    }

    public function show($id)
    {
        return ReceitasProd::find($id);
    }

    public function store(Request $request)
    {
        return ReceitasProd::create($request->all());
    }

    public function update(Request $request, ReceitasProd $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(ReceitasProd $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
