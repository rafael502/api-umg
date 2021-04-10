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

    public function show(Tipomedidor $idTipoMedidor)
    {
        return $idTipoMedidor;
    }

    public function store(Request $request)
    {
        $article = Tipomedidor::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Tipomedidor $idTipoMedidor)
    {
        $idTipoMedidor->update($request->all());

        return response()->json($idTipoMedidor, 200);
    }

    public function delete(Tipomedidor $idTipoMedidor)
    {
        $idTipoMedidor->delete();

        return response()->json(null, 204);
    }


}
