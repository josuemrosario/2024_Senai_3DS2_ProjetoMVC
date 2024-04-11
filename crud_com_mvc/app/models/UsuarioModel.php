<?php

namespace App\models;

use App\Banco;

class UsuarioModel {

    public function getDados(){
        $pdo = Banco::conectar();
        $select = 'SELECT * FROM pessoa ORDER BY id DESC';
        $dados= $pdo->query($select)->fetchAll(\PDO::FETCH_ASSOC);
        // return array('dado1','dado2','dado3','dado4');
        return $dados;
    }
    

}

?>