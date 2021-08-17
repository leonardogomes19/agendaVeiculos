<header align= "center">
    <h3>Contatos</h3>
</header>
<div align= "center">
    <form action="index.php?menuop=agendaContatos" method="post">
    <input type="text" name="txt_pesquisa">
    <input type="submit" value="Pesquisar">
    </form>
</div>
</br>

<table border='1' align= "center">
     <thead>
         <tr>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Endereço</th>
              <th>Edição</th>
              <th>Excluir</th>
              
              </tr>
     </thead>
     <tbody>
     <?php
     $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
     $sql = "SELECT * FROM  tblcontatos
     WHERE
     idcontatos='{$txt_pesquisa}' or
     nome LIKE '%{$txt_pesquisa}%'
     ORDER BY nome ASC
     ";
     $rs = mysqli_query($conexao,$sql) 
     or die("Erro ao executar a consulta!" .mysqli_error($conexao));
     while($dados = mysqli_fetch_assoc($rs) ){
     ?>
     <tr>
          <td><?=$dados["nome"] ?></td>
          <td><?=$dados["numero"] ?></td>
          <td><?=$dados["email"] ?></td>
          <td><?=$dados["endereco"] ?></td>
          <td><a href="index.php?menuop=editarContato&idcontatos=<?=$dados["idcontatos"] ?>">Editar</a></td>
          <td><a href="index.php?menuop=excluirContato&idcontatos=<?=$dados["idcontatos"] ?>">Excluir</a></td>
     </tr>
<?php
    }
    ?>
     </tbody>
</table>