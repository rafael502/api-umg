<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteMedidor;
class ClienteMedidorController extends Controller
{
    public function index()
    {
        return ClienteMedidor::all();
    }

    public function show(ClienteMedidor $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $article = ClienteMedidor::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, ClienteMedidor $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(ClienteMedidor $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
