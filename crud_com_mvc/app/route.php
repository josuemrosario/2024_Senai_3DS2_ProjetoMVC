<?php
    
    namespace App;

    class Route{

        private $routes;
        private $rota_solicitada;

        public function __construct(){
            $this->initRoutes(); // Inicia todas as rotas $routes
            $this->setUrlParam(); // Verifica qual rota o user chamou $rota_solicitada
            $this->runRoute(); // Roda o controller e método responsavel pela rota
        }


        public function initRoutes(){
            
            $this->routes['home'] = array(
                'route' =>  '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );     
            
            $this->routes['create'] = array(
                'route' =>  '/create',
                'controller' => 'IndexController',
                'action' => 'create'
            ); 

        }

        public function setUrlParam(){
            $this->rota_solicitada = $this->getUrl();
        }


        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        }

        public function runRoute(){
            foreach($this->routes as $nome_rota=>$rota){
                // echo '<pre>';
                // print_r($nome_rota);
                // print_r($rota);
                // echo '</pre>';

                if($rota['route'] == $this->rota_solicitada){
                    
                    $classe = 'App\\controllers\\'.$rota['controller'];
                    $acao = $rota['action'];
                    
                    $indexController = new $classe;
                    $indexController->$acao();

                }

            }


        }


    }

?>
