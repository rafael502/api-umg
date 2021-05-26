<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DireccionDomiciliar;

class DireccionDomiController extends Controller
{
    public function index()
    {
        return DireccionDomiciliar::all();
    }

    public function show(DireccionDomiciliar $idDireccionDomiciliar)
    {
        return $idDireccionDomiciliar;
    }

    public function store(Request $request)
    {
        $article = DireccionDomiciliar::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, DireccionDomiciliar $idDireccionDomiciliar)
    {
        $idDireccionDomiciliar->update($request->all());

        return response()->json($idDireccionDomiciliar, 200);
    }

    public function delete(DireccionDomiciliar $idDireccionDomiciliar)
    {
        $idDireccionDomiciliar->delete();

        return response()->json(null, 204);
    }
}
