<?php
include_once("ConexaoBD.php");
$nome = $_GET['nomeP'];
$preco = $_GET['precoP'];
$quantidade = $_GET['quantidadeP'];

$sql =  "INSERT INTO `produto`( `nome`, `preco`, `quantidade`) VALUES ('$nome','$preco','$quantidade')";
mysqli_query($conn, $sql);

?>