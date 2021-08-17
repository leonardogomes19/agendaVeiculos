
    <?php
    $idcontatos = mysqli_real_escape_string($conexao, $_GET["idcontatos"]);
    $sql1 = "SELECT * FROM `tblveiculos` WHERE idcontatos = $idcontatos";
    $busca = mysqli_query($conexao, $sql1);
   
    if (isset($busca)) {
        $sql3 = "DELETE FROM tblcontatos WHERE idcontatos = '$idcontatos'";

        mysqli_query($conexao, $sql3) or die("Erro ao excluir o registro. " . mysqli_error($conexao));
        echo "Registro excluido com sucesso!";
        exit;
    } else {
        while ($array = mysqli_fetch_array($busca)) {
            $id = $array['id_veiculos'];
            $sql2 = "DELETE FROM `tblveiculos` WHERE `id_veiculos` = $id";
            mysqli_query($conexao, $sql2) or die("Erro ao excluir o registro. " . mysqli_error($conexao));

            $sql4 = "DELETE FROM tblcontatos WHERE idcontatos = '$idcontatos'";

            mysqli_query($conexao, $sql4) or die("Erro ao excluir o registro. " . mysqli_error($conexao));
            echo "Registro excluido com sucesso!";
            exit;
        }
    }
    ?>
