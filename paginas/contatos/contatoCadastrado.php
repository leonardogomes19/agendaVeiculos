<div align= "center">
<header>
<h3>Contato Cadastrado</h3>
</header>
<?php

    $nome = mysqli_real_escape_string($conexao,$_POST["nome"]);
    $numero = mysqli_real_escape_string($conexao,$_POST["numero"]);
    $email = mysqli_real_escape_string($conexao,$_POST["email"]);
    $endereco = mysqli_real_escape_string($conexao,$_POST["endereco"]);
    $sql = "INSERT INTO tblcontatos (
        nome,
        numero,
        email,
        endereco)
        VALUES(
            '{$nome}',
            '{$numero}',
            '{$email}',
            '{$endereco}'
        )  
        ";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " .mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!";
?>
<br/>
    <div>
       <a type="submit" value="Cadastrar Veiculo" name="btnCadastrarVeiculo" href="paginas/veiculos/cadastrarVeiculo.php">Cadastrar Veiculo</a>
</div>
