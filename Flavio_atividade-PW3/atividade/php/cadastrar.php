<?php
if (isset($_POST['email'])) {

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require 'Usuario.class.php';
    $usuario = new Usuario();

    $conn = $usuario->conectar();

    if ($conn) {

        $user = $usuario->checkUser($email);

        if ($user) {
            echo "Usuario ja existe, vá para o login";
        } else {

            $user = $usuario->insertUser($nome, $email, $senha);

            if ($user) {
                echo "Usuario inserido com sucesso!";
            } else {
                echo "Erro ao inserir o usuario!!!";
            }
        }

    } else {
        echo "Banco indisponível. Tente mais tarde!";
    }
}
?>