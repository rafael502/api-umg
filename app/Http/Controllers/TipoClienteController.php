<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCliente;

class TipoClienteController extends Controller
{
    public function index()
    {
        return TipoCliente::all();
    }

    public function show(TipoCliente $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = TipoCliente::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, TipoCliente $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(TipoCliente $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

}
