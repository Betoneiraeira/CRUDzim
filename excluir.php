<?php

require_once("conexao.php");

//Pega a matrícula enviada pela URL lá na linha 59 do index.php
$matricula = $_GET['matricula'];

//Comando SQL para apagar o aluno
$sql = "DELETE FROM alunos WHERE matricula = $matricula";

//Executa o comando
mysqli_query($conexao, $sql);

//Volta para a página principal
header("Location:index.php");

?>