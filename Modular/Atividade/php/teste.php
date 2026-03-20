<?php
  
require "Usuario.Class.php";
$usuario = new Usuario();

$conn = $usuario->conexao();

  if ( $conn ){
    $usuario->insertUser("Flavio h", "Flavin@gmail.com", "1234");
    if($retorno){
            echo "<h1>Usuario cadastrar o usuario!!!";
    }else{
    echo "Erro ao cadastrar o Usuario";
    }

}else{
    echo "<h1> Banco indisponivel. Tente mais tarde!";
}



?>