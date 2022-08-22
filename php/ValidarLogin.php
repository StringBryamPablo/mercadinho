<?php
include_once("ConexaoBD.php");
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "Select idFuncionario from funcionario where email= '$email' and senha = '$senha' ";

$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
if($numRows>0 ){
header("Location:http://localhost/mercado/html/HomePage.html
");
}else{
  
echo" <meta http-equiv='refresh' content='0;http://localhost/mercado/html/testando.html'></meta>";
}

?>