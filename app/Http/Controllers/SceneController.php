<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class SceneController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Lista todas as cenas - Aceita filtros por query"
        ]);
    }

    public function new(Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Cadastra uma nova cena"
        ]);
    }

    public function detail($sceneId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Mostra os detalhes da cena $sceneId. Permite a edição da mesma caso seja o criador",
            'id' => $sceneId
        ]);
    }

    public function update($sceneId, Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Atualiza a cena $sceneId",
            'id' => $sceneId
        ]);
    }

    public function delete($sceneId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Exclui a cena $sceneId",
            'id' => $sceneId
        ]);
    }
}
