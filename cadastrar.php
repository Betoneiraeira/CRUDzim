<?php
    require_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $sql = "INSERT INTO alunos(nome, email, idade) values('$nome', '$email', '$idade')";

    mysqli_query($conexao, $sql); //Executa a query em php :)

    header("Location:index.php");

?>