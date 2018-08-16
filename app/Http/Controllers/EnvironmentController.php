<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EnvironmentController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Lista todos os ambientes. Aceita filtros por query"
        ]);
    }

    public function new(Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Cadastra um novo ambiente"
        ]);
    }

    public function detail($environmentId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Mostra os detalhes do ambiente $environmentId. Permite a edição do mesmo caso seja criador",
            'id' => $environmentId
        ]);
    }

    public function update($environmentId, Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Atualiza o ambiente $environmentId",
            'id' => $environmentId
        ]);
    }

    public function delete($environmentId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Exclui o ambiente $environmentId",
            'id' => $environmentId
        ]);
    }
}
