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

    public function show(Datosfactura $idFactura)
    {
        return $idFactura;
    }

    public function store(Request $request)
    {
        $article = Datosfactura::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Datosfactura $idFactura)
    {
        $idFactura->update($request->all());

        return response()->json($idFactura, 200);
    }

    public function delete(Datosfactura $idFactura)
    {
        $idFactura->delete();

        return response()->json(null, 204);
    }
}
