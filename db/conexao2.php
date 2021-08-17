<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cadastroAgenda";

$conexao = new mysqli($servername, $username, $password, $database);
mysqli_set_charset($conexao,"utf8");
if($conexao->connect_error ){
    echo "error ".$conexao->connect_error;
    exit;
}
?>