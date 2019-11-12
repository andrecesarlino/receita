<?php

namespace App\Http\Controllers;
use App\Praga;
use Illuminate\Http\Request;

class PragaController extends Controller
{
    public function index()
    {
        return Praga::all();
    }

    public function show($id)
    {
        return Praga::find($id);
    }

    public function store(Request $request)
    {
        return Praga::create($request->all());
    }

    public function update(Request $request, Praga $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Praga $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
