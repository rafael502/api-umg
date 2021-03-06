<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio;
use DB;

class MunicipioController extends Controller
{
    public function index()
    {
        return Municipio::all();
    }

    public function show(Municipio $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = Municipio::create($request->all());

        return response()->json($article, 201);
    }

    // public function update(Request $request, Municipio $id)
    // {

    //      $id->update($request->all());

    //     return response()->json($id, 200);
    // }

    public function update(Request $request, $id)
    {
        $municipio = Municipio::findOrFail($id);

        $municipio->idDepartamento = $request->idDepartamento;
        $municipio->municipio = $request->municipio;

         $municipio->save();
         return response()->json($id, 200);
    }

    public function delete(Municipio $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

    public function getMunicipios(Request $request){

        $municipios = DB::table('municipios')
            ->join('departamentos','municipios.idDepartamento','=','departamentos.id')->select('municipios.id','municipios.municipio','departamentos.departamento')
            ->where('municipios.idDepartamento','=',$request->get('id'))->get();

        return response()->json($municipios, 200);
    }
}
