<?php

require_once("conexao.php");

//Pega a matrícula enviada pela URL lá na linha 67 do index.php
$matricula = $_GET['matricula'];

//Busca o aluno no banco
$sql = "SELECT * FROM alunos WHERE matricula = $matricula";

$resultado = mysqli_query($conexao, $sql);

//Transforma o resultado em um vetor
$aluno = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Editar Aluno :D</title>
</head>
<body>

<h2>Editar Aluno</h2>

<form action="salvar_edicao.php" method="POST">

    <!-- Campo escondido para enviar a matrícula -->
    <input type="hidden" name="matricula"
    value="<?php echo $aluno['matricula']; ?>">

    Nome:
    <input type="text"
    name="nome"
    value="<?php echo $aluno['nome']; ?>">
    <br><br>

    E-mail:
    <input type="email"
    name="email"
    value="<?php echo $aluno['email']; ?>">
    <br><br>

    Idade:
    <input type="number"
    name="idade"
    value="<?php echo $aluno['idade']; ?>">
    <br><br>

    <input type="submit" value="Salvar">

</form>

</body>
</html>