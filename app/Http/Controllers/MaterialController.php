<?php

namespace App\Http\Controllers;

class MaterialController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        echo "Lista todos os objetos. Aceita filtros por query";
    }

    public function new(){
        echo "Cadastra um novo objeto";
    }

    public function detail($materialId){
        echo "Mostra os detalhes do objeto $materialId. Permite a edição do mesmo caso seja criador";
    }

    public function update($materialId){
        echo "Atualiza o objeto $materialId";
    }

    public function delete($materialId){
        echo "Exclui o objeto $materialId";
    }
}
