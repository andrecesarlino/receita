<?php

namespace App\Http\Controllers;

use App\Cultura;
use Illuminate\Http\Request;

class CulturaController extends Controller
{
    public function index()
    {
        return Cultura::all();
    }

    public function show($id)
    {
        return Cultura::find($id);
    }

    public function store(Request $request)
    {
        return Cultura::create($request->all());
    }

    public function update(Request $request, Cultura $id)
    {
        $id->update($request->all());
        return $id;
    }

    public function delete(Cultura $id)
    {
        $id->delete();
        return response()->json(null, 204);
    }
}
