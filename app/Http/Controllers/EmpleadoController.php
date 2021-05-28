<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empleado;
use App\LoginUsuario;
use Carbon\Carbon;
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
        dd($request);
        $empleado = Empleado::create($request->all());

        $idEmpleado = $empleado->id;
       

        $nombre = $empleado->nombre;
        
       $user= $this->crearusuario($idEmpleado,$nombre);

        return response()->json($user, 200);

    }

    public function crearusuario($idEmpleado,$nombre)
    {   
        $contra = str_shuffle($nombre);
        $pass = str_shuffle('1234567abcdef');

        $usuario = new LoginUsuario();
        $usuario->usuario = $contra;
        $usuario->password = $pass;
        $usuario->perfil = 'empleado';
        $usuario->idEmpleado = $idEmpleado;
        $usuario->estado = 1;
        $usuario->save();

        return $usuario;
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
