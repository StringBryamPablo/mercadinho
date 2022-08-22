<?php
include_once("ConexoBD.php");
$id= $_GET['codigo_produto'];


$sql = "SELECT * FROM produto WHERE id ='$id'";
mysqli_query($conn, $sql);


?>