<?php
require 'Usuario.class.php';

$usuarioObj = new Usuario();
$conn = $usuarioObj->conecta();

if($conn){

    if (isset($_POST['usuario'])){
        $nome  = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $user = $usuarioObj->checkUser($email);

        if($user){
            echo "<script> 
                    alert('ja existe saporra')
                  </script>";
            exit();
        }else{
            $user = $usuarioObj->inserirUsuario($nome, $email, $senha);
            if($user){
                echo "Usuario cadastrado com sucesso!";
            }else{
                echo "Erro ao cadastrar o usuario!";
            }
        }

    }else{
        echo "ERRO NO POST!";
    }

}else{
    echo "<script> 
            alert('BANCO INDISPONIVEL')
          </script>";
}