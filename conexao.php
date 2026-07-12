<?php
    $host = "localhost";
    $usuario = "root";
    $senha = ""; //Coloque a senha do seu MySQL local aqui
    $banco = "escola";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    if(!$conexao){
        die("O SISTEMA MORREU 💥");
    }
?>
