<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        echo "Lista todos os usuários - Precisa ser Admin. Aceita filtros por query";
    }

    public function new(){
        echo "Cadastra um novo usuário";
    }

    public function detail($userId){
        echo "Mostra os detalhes do usuário $userId. Permite a edição do mesmo caso seja admin";
    }

    public function update($userId){
        echo "Atualiza o usuário $userId";
    }

    public function delete($userId){
        echo "Exclui o usuário $userId";
    }
}
