<?php
    require_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Maneiro :D</title>
</head>
<body>
    <div class="container">
        <h2>🦖Cadastro de Alunos🦕</h2>

        <form action="cadastrar.php" method="POST">
            Nome:
            <input type="text" name="nome">
            <br><br>

            E-mail:
            <input type="email" name="email">
            <br><br>

            Idade
            <input type="number" name="idade">
            <br><br>

            <input type="submit" value="CADASTRAR 💥">
        </form>

        <?php
            $sql = "SELECT * FROM alunos";
            $resultado = mysqli_query($conexao, $sql);
        ?>

        <h2>Tabela de Alunos</h2>
        <table border="1">
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>Açoes</th>
                <th>Açoes</th>
            </tr>

            <?php
                while($linha=mysqli_fetch_assoc($resultado)){ //Essa chave vai fechar láaaaaaa embaixo
            ?>
                <tr>
                    <td><?php echo $linha ['matricula'];?> </td>
                    <td><?php echo $linha ['nome'];?></td>
                    <td><?php echo $linha ['idade'];?></td>
                    <td><?php echo $linha ['email'];?></td>
                    <td>
                        <!-- Envia a matrícula do aluno para "excluir.php", onde o registro será removido do banco -->
                        <a href="excluir.php?matricula=<?php echo $linha ['matricula'];?>"
                        style="background-color: red;"
                        onclick="return confirm ('Desejar realmente excluir?');">
                        Excluir
                        </a>
                    </td>
                    <td>
                        <!-- Envia a matrícula do aluno para "editar.php" -->
                        <a href="editar.php?matricula=<?php echo $linha ['matricula'];?>"
                        style="background-color: blue;">
                        Editar
                        </a>
                    </td>
                </tr>
            <?php
                } /*Sim, ela abriu em <?php ?>um e fechou no outro*/
            ?>

        </table>

    </div>
    
</body>
</html>