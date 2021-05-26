<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Datosfactura;
class DatosFacturaController extends Controller
{
    public function index()
    {
        return Datosfactura::all();
    }

    public function show(Datosfactura $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Datosfactura::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Datosfactura $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Datosfactura $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
