
<header align= "center">
    <h3>Cadastro de Veiculo</h3>
</header>
<div align= "center">
<form action="index.php?menuop=veiculoCadastrado" method="post">

    <div>
        <select name="name" id="name">
        <?php
        $sql = "SELECT `idcontatos`, `nome` FROM `tblcontatos` "; 
        $busca = mysqli_query($conexao,$sql);
        while($array = mysqli_fetch_array($busca)){
            $idcontatos = $array['idcontatos'];
            $nome = $array['nome'];
            print_r($nome);
            ?>
            
            <option value="<?php echo $idcontatos ?>"><?php echo $nome ?> </option> 

            <?php
        }
        ?>
        </select>

    <div>
    <br/> 
    <div>
        <label for="marca">Marca do Veiculo</label>
        <input type="text" name="marca"/>
    </div>
    <br/>
    <div>
        <label for="modelo">Modelo do Veiculo</label>
        <input type="text" name="modelo"/>
    </div>
    <br/>
    <div>
        <label for="placa">Placa do Veiculo</label>
        <input type="text" name="placa"/>
    </div>
    <br/>
    <div>

    <button type="submit" name="btnAdicionar">Enviar </button>
    </div>

</form>
</div>