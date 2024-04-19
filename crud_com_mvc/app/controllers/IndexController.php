<?php

    namespace App\controllers;

    // use App\Banco;
    use App\models\UsuarioModel;

    class IndexController {

        // chamada na rota / (raiz)
        public function index(){

            //Acessando o Banco
            // $db = Banco::conectar();

            // echo 'Controler: IndexController - Acao: index() <br>';
            $usuarios = new UsuarioModel();
            // $dados = array('dado1','dado2','dado3','dado4');
            $dados = $usuarios->getDados();
            require_once '..\app\views\indexUsuario.phtml';
    
        }
    
        // chamada na rota /create
        public function create(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nomeErro = null;
                $enderecoErro = null;
                $telefoneErro = null;
                $emailErro = null;
                $sexoErro = null;
            
                if (!empty($_POST)) {
                    $validacao = True;
                    $novoUsuario = False;
                    if (!empty($_POST['nome'])) {
                        $nome = $_POST['nome'];
                    } else {
                        $nomeErro = 'Por favor digite o seu nome!';
                        $validacao = False;
                    }
            
            
                    if (!empty($_POST['endereco'])) {
                        $endereco = $_POST['endereco'];
                    } else {
                        $enderecoErro = 'Por favor digite o seu endereço!';
                        $validacao = False;
                    }
            
            
                    if (!empty($_POST['telefone'])) {
                        $telefone = $_POST['telefone'];
                    } else {
                        $telefoneErro = 'Por favor digite o número do telefone!';
                        $validacao = False;
                    }
            
            
                    if (!empty($_POST['email'])) {
                        $email = $_POST['email'];
                        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $emailErro = 'Por favor digite um endereço de email válido!';
                            $validacao = False;
                        }
                    } else {
                        $emailErro = 'Por favor digite um endereço de email!';
                        $validacao = False;
                    }
            
            
                    if (!empty($_POST['sexo'])) {
                        $sexo = $_POST['sexo'];
                    } else {
                        $sexoErro = 'Por favor seleccione um campo!';
                        $validacao = False;
                    }
                }
            
            //Inserindo no Banco:
                if ($validacao) {
                    $usuarios = new UsuarioModel();
                    $dados = $usuarios->setPessoa($nome, $endereco, $telefone, $email, $sexo);
                    header("Location: /");
                }
            }
            require_once '..\app\views\createUsuario.phtml';
        }
    }


?>