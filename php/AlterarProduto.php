<?php
include_once("ConexoBD.php");
$nome = $_GET['nomeP'];
$preco = $_GET['precoP'];
$quantidade = $_GET['quantidadeP'];

$sql = "UPDATE produto SET nome = '$nome', preco = '$preco', quantidade = '$quantidade'";
mysqli_query($conn, $sql);

?>