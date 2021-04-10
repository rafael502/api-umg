<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departamentoempleado;


class DepEmpleadoController extends Controller
{
    public function index()
    {
        return Departamentoempleado::all();
    }

    public function show(Departamentoempleado $idDepEmpleado)
    {
        return $idDepEmpleado;
    }

    public function store(Request $request)
    {
        $article = Departamentoempleado::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Departamentoempleado $idDepEmpleado)
    {
        $idDepEmpleado->update($request->all());

        return response()->json($idDepEmpleado, 200);
    }

    public function delete(Departamentoempleado $idDepEmpleado)
    {
        $idDepEmpleado->delete();

        return response()->json(null, 204);
    }
}
