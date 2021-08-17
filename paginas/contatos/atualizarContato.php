<div align= "center">
<header>
<h3>Atualizar Contato</h3>
</header>
<?php
    $idcontatos = mysqli_real_escape_string($conexao,$_POST["idcontatos"]);
    $nome = mysqli_real_escape_string($conexao,$_POST["nome"]);
    $numero = mysqli_real_escape_string($conexao,$_POST["numero"]);
    $email = mysqli_real_escape_string($conexao,$_POST["email"]);
    $endereco = mysqli_real_escape_string($conexao,$_POST["endereco"]);
    $sql = "UPDATE tblcontatos SET 
    nome = '{$nome}',
    numero = '{$numero}',
    email = '{$email}',
    endereco = '{$endereco}'
    WHERE idcontatos = '{$idcontatos}'
    ";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " .mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso!";
?>
</div>