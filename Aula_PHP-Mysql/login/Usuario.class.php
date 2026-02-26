<?php

class Usuarios{
private $id;
private $nome;
private $email;
private $senha;

private function getId(){
    return $this -> $id;
}
private function getId(){
    return $this -> $nome;
}
private function getId(){
    return $this -> $email;
}
private function getId(){
    return $this -> $senha;
}


private function setId($nome){
    return $this -> nome = $nome;
}
private function setId($email){
    return $this -> email = $email;
}
private function setId($senha){
    return $this -> senha = $senha;
}

public function checkUser($email){
    $sql = "SELECT * FROM usuarios WHERE email = :e";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":e", $email);
    $stmt->execute();

    return $stmt->rowCount() > 0;
}

public function checkPass($email , $senha){
    $sql = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":e", $email);
    $stmt->bindValue(":s", $senha);
    $stmt->execute();

    return $stmt->rowCount() > 0;
}

public function connection(){
    try{
      $dns = "mysql:dbname=login;host=Localhost";
      $user = "root"
      $pass = "";

      $this->pdo = new PDO ($dns, $user, $pass);
    return true;
    } catch(PDOException $e){
    return false;

        }


    }


}






?>