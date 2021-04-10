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

    public function show(Cliente $DPI)
    {
        return $DPI;
    }

    public function store(Request $request)
    {
        $article = Cliente::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Cliente $DPI)
    {
        $DPI->update($request->all());

        return response()->json($DPI, 200);
    }

    public function delete(Cliente $DPI)
    {
        $DPI->delete();

        return response()->json(null, 204);
    }
}
