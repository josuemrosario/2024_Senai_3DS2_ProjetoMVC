<?php

namespace App\models;

use App\Banco;

class Modelo1 {

    public function getDados(){
        $pdo = Banco::conectar();
        $select = "select * from tabela1;";
        $dados= $pdo->query($select)->fetchAll(\PDO::FETCH_ASSOC);
        // return array('dado1','dado2','dado3','dado4');
        return $dados;
    }
    

}

?>