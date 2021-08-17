<div align= "center">
<header>
<h3>Veiculo Cadastrado</h3>
</header>
<?php

    $idcontatos = mysqli_real_escape_string($conexao,$_POST["name"]); 
    $marca = mysqli_real_escape_string($conexao,$_POST["marca"]);
    $modelo = mysqli_real_escape_string($conexao,$_POST["modelo"]);
    $placa = mysqli_real_escape_string($conexao,$_POST["placa"]);
    $sql = "INSERT INTO `tblveiculos`( `idcontatos`, `placa`, `marca`, `modelo`) 
    VALUES ($idcontatos,'$placa','$marca','$modelo') ";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " .mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!";
?>
</div>
