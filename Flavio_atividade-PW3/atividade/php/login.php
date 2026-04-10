<?php
session_start();

if(isset($_POST['email'])){
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    require 'Usuario.Class.php';
    $usuario = new Usuario();
    $conn = $usuario->conectar();
    if( $conn ){
        $user = $usuario->checkUser( $email );
        if ( $user ){
            $user = $usuario->checkPass( $email, $senha);
            if( $user ){
                $_SESSION['nome'] = "Teste";
                header("Location:home.php");
            }else{
                 echo "Usuario ou senha incorretos";
            }
        }else{
        echo "Usuario nao existe";
    }
    }else{
        echo "Erro ao conectar. Tente mais tarde!";
    }


}else{
    echo "Banco indisponivel. Tente mais tartde!";
}

?>