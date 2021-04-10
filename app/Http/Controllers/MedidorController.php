<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medidor;

class MedidorController extends Controller
{
    public function index()
    {
        return Medidor::all();
    }

    public function show(Medidor $idMedidor)
    {
        return $idMedidor;
    }

    public function store(Request $request)
    {
        $article = Medidor::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Medidor $idMedidor)
    {
        $idMedidor->update($request->all());

        return response()->json($idMedidor, 200);
    }

    public function delete(Medidor $idMedidor)
    {
        $idMedidor->delete();

        return response()->json(null, 204);
    }
}
