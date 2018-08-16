<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Lista todas as ações - Aceita filtros por query"
        ]);
    }

    public function new(Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Cadastra uma nova ação"
        ]);
    }

    public function detail($actionId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Mostra os detalhes da ação $actionId. Permite a edição da mesma caso seja o criador",
            'id' => $actionId
        ]);
    }

    public function update($actionId, Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Atualiza a ação $actionId",
            'id' => $actionId
        ]);
    }

    public function delete($actionId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Exclui a ação $actionId",
            'id' => $actionId
        ]);
    }
}
