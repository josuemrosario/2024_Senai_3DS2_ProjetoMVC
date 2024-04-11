<?php

    namespace App\controllers;

    // use App\Banco;
    use App\models\Modelo1;

    class IndexController {

        public function index(){

            //Acessando o Banco
            // $db = Banco::conectar();

            echo 'Controler: IndexController - Acao: index() <br>';
            $modelo1 = new Modelo1;
            // $dados = array('dado1','dado2','dado3','dado4');
            $dados = $modelo1->getDados();
            require_once '..\app\views\index.phtml';
    
        }
    

    }


?>