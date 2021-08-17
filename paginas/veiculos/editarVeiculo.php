<?php
$id_veiculos = $_GET["id_veiculos"];

$sql = "SELECT * FROM tblveiculos WHERE id_veiculos = {$id_veiculos}";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro. " .mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs); 
?>
<header align= "center">
    <h3>Editar Veiculo</h3>
</header>

<div align= "center">
<form action="index.php?menuop=atualizarVeiculo" method="post">

    <div>
        <label for="id_veiculos">ID</label>
        <input type="text" name="id_veiculos" value="<?=$dados["id_veiculos"]?>">
    </div>
    <br/>
    <div>
        <label for="marca">Marca</label>
        <input type="text" name="marca" value="<?=$dados["marca"]?>">
    </div>
    <br/>
    <div>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="<?=$dados["modelo"]?>">
    </div>
    <br/>
    <div>
        <label for="placa">Placa</label>
        <input type="text" name="placa" value="<?=$dados["placa"]?>">
    </div>
    <br/>
    <div>
       <input type="submit" value="Modificar" name="btnModificar">
    </div>

</form>
</div>