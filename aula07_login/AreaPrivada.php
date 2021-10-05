<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }
?>

Você está em uma área privada!

<a href="sair.php"> SAIR </a>