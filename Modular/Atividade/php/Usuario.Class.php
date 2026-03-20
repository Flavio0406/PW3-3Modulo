<?php

class Usuario {

    private $nome;
    private $email;
    private $senha;
    private $id;
    private $pdo;

    function getId(){
        return $this->id;

    }

    function getEmail(){
        return $this->email;

    }


 function getSenha(){
        return $this->senha;

    }

 function getNome(){
        return $this->nome;

    }

///////////////////////////////////////////////////////////////////////////////////////////////////
//set

 public function setNome($nome){
    $this->nome = $nome;
    

}

public function setEmail($email){
    $this->email = $email; 
    

}

public function setSenha($senha){
    $this->senha = $senha; 
    

}

 function conexao(){
    $banco = "mysql:dbname=banco;host=localhost";
    $usuario = "root";
    $senha = "";

    try{
        $this->pdo = new PDO ($banco, $usuario, $senha);
        return true;
}catch (\Throwable $th) {
        return false;
}
    }


    function insertUser($nome, $email, $senha){
        $sql  = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindValue(":n",$nome);
        $stmt->bindValue(":s",$senha);
        $stmt->bindValue(":e",$email);

        return $stmt->execute();


}

}