<?php
if( isset( $POST['nome'])){
    $nome  = $POST['nome'];
    $email = $POST["email"];
    $senha = $POST['senha'];

    require 'usuario.class.php';
    $usuario = new Usuario();

    $user = $usuario->insertUser($nome, $email, $senha);
    if ($user){
        echo "Usuario inserido com Sucesso!";
    }else{
        echo "Erro ao inserir o Usuario!";
    }
}