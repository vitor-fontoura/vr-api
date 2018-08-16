<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Lista todos os usuários - Precisa ser Admin. Aceita filtros por query"
        ]);
    }

    public function new(Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Cadastra um novo usuário"
        ]);
    }

    public function detail($userId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Mostra os detalhes do usuário $userId. Permite a edição do mesmo caso seja admin",
            'id' => $userId
        ]);
    }

    public function update($userId, Request $request){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Atualiza o usuário $userId",
            'id' => $userId
        ]);
    }

    public function delete($userId){
        return response()->json([
            'method' => __METHOD__,
            'description' => "Exclui o usuário $userId",
            'id' => $userId
        ]);
    }
}
