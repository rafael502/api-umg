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

    public function show(TipoCliente $idTipoCliente)
    {
        return $idTipoCliente;
    }

    public function store(Request $request)
    {
        $article = TipoCliente::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, TipoCliente $idTipoCliente)
    {
        $idTipoCliente->update($request->all());

        return response()->json($idTipoCliente, 200);
    }

    public function delete(TipoCliente $idTipoCliente)
    {
        $idTipoCliente->delete();

        return response()->json(null, 204);
    }

}
