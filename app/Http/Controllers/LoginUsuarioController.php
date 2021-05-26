<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginUsuario;
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

    public function store(Request $request)
    {
        $article = LoginUsuario::create($request->all());

        return response()->json($article, 201);
    }

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
}
