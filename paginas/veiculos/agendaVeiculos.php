<header align= "center">
    <h3>Veiculos</h3>
</header>
<div align= "center">
    <form action="index.php?menuop=agendaVeiculos" method="post">
    <input type="text" name="txt_pesquisa">
    <input type="submit" value="Pesquisar">
    </form>
</div>
</br>

<table border='1' align= "center">
     <thead>
         <tr>
              <th>Nome</th>
              <th>Marca do Veiculo</th>
              <th>Modelo do Veiculo</th>
              <th>Placa do Veiculo</th>
              <th>Edição</th>
              <th>Excluir</th>
              
              </tr>
     </thead>
     <tbody>
     <?php
     $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
     $sql = "SELECT * FROM  tblveiculos 
     INNER JOIN tblcontatos ON (tblveiculos.idcontatos = tblcontatos.idcontatos)
     WHERE
     id_veiculos='{$txt_pesquisa}' or
     marca LIKE '%{$txt_pesquisa}%'
     ORDER BY marca ASC
     ";
     $rs = mysqli_query($conexao,$sql) 
     or die("Erro ao executar a consulta!" .mysqli_error($conexao));
     while($dados = mysqli_fetch_assoc($rs) ){
     ?>
     <tr>
          <td><?=$dados["nome"] ?></td>
          <td><?=$dados["marca"] ?></td>
          <td><?=$dados["modelo"] ?></td>
          <td><?=$dados["placa"] ?></td>
          <td><a href="index.php?menuop=editarVeiculo&id_veiculos=<?=$dados["id_veiculos"] ?>">Editar</a></td>
          <td><a href="index.php?menuop=excluirVeiculo&id_veiculos=<?=$dados["id_veiculos"] ?>">Excluir</a></td>
     </tr>
<?php
    }
    ?>
     </tbody>
</table>