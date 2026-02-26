<?php

session_start();
if(isset($_SESSION["user"])){
    echo " Bem-vindo, " , $_SESSION["user"] , "!";
}else{
    echo "Usuario nâo encontrado.";
}

?>