<?php

namespace App\Http\Controllers;

class EnvironmentController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        echo "Lista todos os ambientes. Aceita filtros por query";
    }

    public function new(){
        echo "Cadastra um novo ambiente";
    }

    public function detail($environmentId){
        echo "Mostra os detalhes do ambiente $environmentId. Permite a edição do mesmo caso seja criador";
    }

    public function update($environmentId){
        echo "Atualiza o ambiente $environmentId";
    }

    public function delete($environmentId){
        echo "Exclui o ambiente $environmentId";
    }
}
