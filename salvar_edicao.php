<?php

require_once("conexao.php");

//Recebe os dados do formulário
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

//Atualiza o aluno
$sql = "UPDATE alunos
        SET nome='$nome',
            email='$email',
            idade='$idade'
        WHERE matricula=$matricula";

//Executa a query
mysqli_query($conexao, $sql);

//Volta para a página principal
header("Location:index.php");

?>