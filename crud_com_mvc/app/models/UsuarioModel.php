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
    
    public function setPessoa($nome, $endereco, $telefone, $email, $sexo){

        $pdo = Banco::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO pessoa (nome, endereco, telefone, email, sexo) VALUES(?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome, $endereco, $telefone, $email, $sexo));
        Banco::desconectar();
        return '';

    }

}

?>