<?php
$idcontatos = $_GET["idcontatos"];

$sql = "SELECT * FROM tblcontatos WHERE idcontatos = {$idcontatos}";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro. " .mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs); 
?>
<header align= "center">
    <h3>Editar Contato</h3>
</header>

<div align= "center">
<form action="index.php?menuop=atualizarContato" method="post">

    <div>
        <label for="idcontatos">ID</label>
        <input type="text" name="idcontatos" value="<?=$dados["idcontatos"]?>">
    </div>
    <br/>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?=$dados["nome"]?>">
    </div>
    <br/>
    <div>
        <label for="numero">Telefone</label>
        <input type="text" name="numero" value="<?=$dados["numero"]?>">
    </div>
    <br/>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$dados["email"]?>">
    </div>
    <br/>
    <div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" value="<?=$dados["endereco"]?>">
    </div>
    <br/>
    <div>
       <input type="submit" value="Modificar" name="btnModificar">
    </div>

</form>
</div>