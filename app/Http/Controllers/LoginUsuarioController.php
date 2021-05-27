<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginUsuario;
use DB;
class LoginUsuarioController extends Controller
{
    public function index()
    {
        return LoginUsuario::all();
    }

    public function show(LoginUsuario $id)
    {
        return $id;
    }

    // public function store(Request $request)
    // {
    //     $article = LoginUsuario::create($request->all());

    //     return response()->json($article, 201);
    // }

    public function update(Request $request, LoginUsuario $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(LoginUsuario $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

    public function login(Request $request)
    {
        $user = DB::table('login_usuarios')
            ->where('usuario', '=', $request->get('user'))
            ->where('password', '=', $request->get('pass'))->get();

        if(!$user->isEmpty()){
            $idEmpleado = $user->pluck('idEmpleado');
            //dd($idEmpleado);
            $empleado = DB::table('empleados')
                ->join('login_usuarios','empleados.id','=','login_usuarios.idEmpleado')->select('empleados.*')
                ->where('empleados.id','=',$idEmpleado)->get();

            //dd($empleado);
           // $empleado->put('idUsuario',$user->pluck('id'))->all();
            //return response()->json($empleado, 200);

            return response()->json([
                'success' => true,
                'empleado' => $empleado
            ],200);

        }else{
            return response()->json([
                'success' => false
            ],200);
        }
    }
}
