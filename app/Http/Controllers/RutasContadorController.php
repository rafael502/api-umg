<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RutasContador;
class RutasContadorController extends Controller
{
    public function index()
    {
        return RutasContador::all();
    }

    public function show(RutasContador $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = RutasContador::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, RutasContador $id)
    {
        $idMunicipio->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(RutasContador $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
