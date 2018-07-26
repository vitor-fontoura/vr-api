<?php

namespace App\Http\Controllers;

class SceneController extends Controller
{
    public function __construct()
    {
        //
    }

    public function list(){
        echo "Lista todas as cenas - Aceita filtros por query";
    }

    public function new(){
        echo "Cadastra uma nova cena";
    }

    public function detail($sceneId){
        echo "Mostra os detalhes da cena $sceneId. Permite a edição da mesma caso seja o criador";
    }

    public function update($sceneId){
        echo "Atualiza a cena $sceneId";
    }

    public function delete($sceneId){
        echo "Exclui a cena $sceneId";
    }
}
