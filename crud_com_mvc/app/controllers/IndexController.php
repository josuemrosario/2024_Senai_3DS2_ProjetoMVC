<?php

    namespace App\controllers;

    // use App\Banco;
    use App\models\UsuarioModel;

    class IndexController {

        public function index(){

            //Acessando o Banco
            // $db = Banco::conectar();

            echo 'Controler: IndexController - Acao: index() <br>';
            $usuarios = new UsuarioModel();
            // $dados = array('dado1','dado2','dado3','dado4');
            $dados = $usuarios->getDados();
            require_once '..\app\views\indexUsuario.phtml';
    
        }
    

    }


?>