<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RutasEmpleadoFacturar;

class RutasEmpleadoFacturarController extends Controller
{
    public function index()
    {
        return RutasEmpleadoFacturar::all();
    }

    public function show(RutasEmpleadoFacturar $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = RutasEmpleadoFacturar::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, RutasEmpleadoFacturar $id)
    {
        $idMunicipio->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(RutasEmpleadoFacturar $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
