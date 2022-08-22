<?php
include_once("ConexaoBD.php");
$id= $_GET['id'];


$sql = "DELETE FROM produto WHERE id ='$id'";
mysqli_query($conn, $sql);

header("Location: VisualizarProdutos.php");
?>