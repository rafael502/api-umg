<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipomedidor;

class TipomedidorController extends Controller
{
   
    public function index()
    {
        return Tipomedidor::all();
    }

    public function show(Tipomedidor $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Tipomedidor::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Tipomedidor $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Tipomedidor $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }


}
