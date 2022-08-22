<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(107, 50, 56), rgb(120, 81, 60));
        }

        .table-bg{
            background: rgba(0,0,0,0.3);
        }
</style>
</head>

<body>
    <div><a href="../html/HomePage.html"><button>voltar</button></a></div>
    <div class= "m-5"> 
            <table class="table text-white table-bg">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">PRODUTO</th>
                <th scope="col">PRECO</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
            <?php   
                    include_once("ConexaoBD.php");

                    $sql = "SELECT * FROM produto";
                    $result = mysqli_query($conn, $sql);
                    
                    
                    while($row = mysqli_fetch_assoc($result)){
                            echo"<tr>";
                            echo"<td>".$row['id']."</td>";
                            echo"<td>".$row['nome']."</td>";
                            echo"<td>".$row['preco']."</td>";
                            echo"<td>".$row['quantidade']."</td>";
                            echo "<td>
                                <a class='btn btn-sm btn-primary' href='ExcluirProduto.php?id=$row[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                                        </svg>
                                </a>
                                <a class='btn btn-sm btn-danger' href='ExcluirProduto.php?id=$row[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                                </a>
                            </td>";
                            echo "</tr>";
                        }
                ?>
            </tbody>
            </table>
    </div>
</body>
</html>