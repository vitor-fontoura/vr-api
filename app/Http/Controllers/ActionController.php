<?php

namespace App\Http\Controllers;

class ActionController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        echo "Lista todas as ações - Aceita filtros por query";
    }

    public function new(){
        echo "Cadastra uma nova ação";
    }

    public function detail($actionId){
        echo "Mostra os detalhes da ação $actionId. Permite a edição da mesma caso seja o criador";
    }

    public function update($actionId){
        echo "Atualiza a ação $actionId";
    }

    public function delete($actionId){
        echo "Exclui a ação $actionId";
    }
}
