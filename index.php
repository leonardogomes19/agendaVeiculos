<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>
<body>
    <header align= "center">
    <h1>Agenda de Contatos</h1>
    <nav>
    <a href="index.php?menuop=cadastrarContato">Home</a>
    <a href="index.php?menuop=cadastrarVeiculo">Home Veiculos</a>
    <a href="index.php?menuop=agendaContatos">Contatos</a>
    <a href="index.php?menuop=agendaVeiculos">Veiculos</a>
    </nav>
    </header>
    <hr>

    <?php
    
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"cadastrarUsuario";
        switch ($menuop) {
            case 'cadastrarContato';
                include("paginas/contatos/cadastrarContato.php");
                break;
            case 'agendaContatos';
                include("paginas/contatos/agendaContatos.php");
                break;
            case 'contatoCadastrado';
                include("paginas/contatos/contatoCadastrado.php");
                break;
            case 'editarContato';
                include("paginas/contatos/editarContato.php");
                break;
            case 'atualizarContato';
                include("paginas/contatos/atualizarContato.php");
                break;
            case 'excluirContato';
                include("paginas/contatos/excluirContato.php");
                break;
            case 'cadastrarVeiculo';
                include("paginas/veiculos/cadastrarVeiculo.php");
                break;
            case 'agendaVeiculos';
                include("paginas/veiculos/agendaVeiculos.php");
                break;
            case 'veiculoCadastrado';
                include("paginas/veiculos/veiculoCadastrado.php");
                break;
            case 'editarVeiculo';
                include("paginas/veiculos/editarVeiculo.php");
                break;
            case 'atualizarVeiculo';
                include("paginas/veiculos/atualizarVeiculo.php");
                break;
            case 'excluirVeiculo';
                include("paginas/veiculos/excluirVeiculo.php");
                break;
          
        }
    ?>

</body>
</html>