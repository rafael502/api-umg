<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        return Departamento::all();
    }

    public function show(Departamento $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Departamento::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Departamento $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Departamento $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
