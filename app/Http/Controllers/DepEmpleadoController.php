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

    public function show(Departamentoempleado $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Departamentoempleado::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Departamentoempleado $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Departamentoempleado $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
