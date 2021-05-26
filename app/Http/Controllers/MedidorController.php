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

    public function show(Medidor $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Medidor::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Medidor $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Medidor $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
