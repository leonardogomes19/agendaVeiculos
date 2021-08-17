<div align= "center">
<header>
<h3>Atualizar Veiculo</h3>
</header>
<?php
    $id_veiculos = mysqli_real_escape_string($conexao,$_POST["id_veiculos"]);
    $marca = mysqli_real_escape_string($conexao,$_POST["marca"]);
    $modelo = mysqli_real_escape_string($conexao,$_POST["modelo"]);
    $placa = mysqli_real_escape_string($conexao,$_POST["placa"]);
    $sql = "UPDATE tblveiculos SET 
    `marca` = '$marca',
    `modelo` = '$modelo',
    `placa` = '$placa'
    WHERE id_veiculos = $id_veiculos
    ";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " .mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso!";
?>
</div>