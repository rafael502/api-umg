<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fecha;

class FechaController extends Controller
{
    public function index()
    {
        return Fecha::all();
    }

    public function show(Fecha $idFechas)
    {
        return $idFechas;
    }

    public function store(Request $request)
    {
        $article = Fecha::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Fecha $idFechas)
    {
        $idFechas->update($request->all());

        return response()->json($idFechas, 200);
    }

    public function delete(Fecha $idFechas)
    {
        $idFechas->delete();

        return response()->json(null, 204);
    }
}
