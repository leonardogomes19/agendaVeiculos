<div align= "center">
<header>
    <h3>Excluir Contato</h3>
</header>
<?php
$id_veiculos = mysqli_real_escape_string($conexao,$_GET["id_veiculos"]);
$sql = "DELETE FROM tblveiculos 
WHERE id_veiculos = '{$id_veiculos}'";

mysqli_query($conexao,$sql) or die("Erro ao excluir o registro. " . mysqli_error($conexao));
echo "Registro excluido com sucesso!";
?>
</div>