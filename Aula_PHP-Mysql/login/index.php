<?php
session_start();

$_SESSION["user"] = " Fravin ";
header("Location: pagina2.php");
exit();

?>