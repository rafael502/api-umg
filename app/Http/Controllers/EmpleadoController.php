<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        return Empleado::all();
    }

    public function show(Empleado $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Empleado::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Empleado $id)
    {
        $id->update($request->all());

        return response()->json($DPI, 200);
    }

    public function delete(Empleado $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
