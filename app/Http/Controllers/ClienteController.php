<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function show(Cliente $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Cliente::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Cliente $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Cliente $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
