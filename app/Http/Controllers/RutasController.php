<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function getAllClientes(Request $request)
    {
        //dd($request);
        $municipios = DB::table('cliente_medidors as cm')
            ->join('clientes as clien', 'cm.idCliente', '=', 'clien.id')
            ->join('medidors as med', 'cm.idMedidor', '=', 'med.id')
            ->join('departamentos as dep', 'clien.idDepartamento', '=', 'dep.id')
            ->join('municipios as muni', 'clien.idMunicipio', '=', 'muni.id')
            ->select('cm.nis', 'cm.idCliente',
                'clien.dpi', 'clien.nombre', 'clien.apellido', 'clien.nit', 'clien.email', 'clien.telefono',
                'dep.departamento', 'muni.municipio',
                'cm.idMedidor', 'med.medidor', 'med.modelo')
            ->where('cm.idRuta', '=', $request->get('idRuta'))
            ->get();

        return response()->json($municipios, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
