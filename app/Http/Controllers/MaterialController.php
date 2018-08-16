<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MaterialController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Lista todos os objetos. Aceita filtros por query"
        ]);
    }

    public function new(Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Cadastra um novo objeto"
        ]);
    }

    public function detail($materialId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Mostra os detalhes do objeto $materialId. Permite a edição do mesmo caso seja criador",
            'id' => $materialId
        ]);
    }

    public function update($materialId, Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Atualiza o objeto $materialId",
            'id' => $materialId
        ]);
    }

    public function delete($materialId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Exclui o objeto $materialId",
            'id' => $materialId
        ]);
    }
}
