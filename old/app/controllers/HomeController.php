<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class HomeController
{

    public function index()
    {
        $clientes = Cliente::numero('clientes');

        $arquivos = Arquivos::buscar();

        return view('index', compact('clientes','arquivos'));
    }

    public function userIndex()
    {
        $arquivos_atuais = Arquivos::listaPasta();

        $arquivos_salvos = Arquivos::buscarSirius();

        $arquivos = [];

        foreach($arquivos_salvos as $arquivo){
            array_push($arquivos, $arquivo->nome);
        }

        $nao_cadastrados = array_diff($arquivos_atuais, $arquivos);

        foreach ($nao_cadastrados as $nao_cadastrado){
            $file['nome'] = $nao_cadastrado;
            $file['sirius'] = $_SESSION['sirius'];
            $file['status'] = 'entrada';
            $file['lido'] = 0;

            Arquivos::cadastrar($file);
        }

        $arquivos = Arquivos::buscar();

        return view("user-index", compact('arquivos'));
    }

}