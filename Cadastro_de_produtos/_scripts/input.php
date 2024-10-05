
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $mysqli->real_escape_string($_POST['nome_produto']);
    $preco_compra = $mysqli->real_escape_string($_POST['preco_compra']);
    $preco_venda = $mysqli->real_escape_string($_POST['preco_venda']);
    $codigo_produto = $mysqli->real_escape_string($_POST['codigo_produto']);
    $nome_fornecedor = $mysqli->real_escape_string($_POST['nome_fornecedor']);

    $sql = "INSERT INTO produtos (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor) VALUES ('$nome_produto', '$preco_compra', '$preco_venda', '$codigo_produto', '$nome_fornecedor')";

    if ($mysqli->query($sql) === TRUE) {
        echo "<script language='javascript'>
            swal.fire({
                icon:'success',
                text:'produto cadastrado com sucesso',
                type:'success'
            }).then((okay)=>{
                if(okay){
                    window.location.href='../index.php';                 
                }
            });
        </script>";
    } else {
        echo "<script language='javascript'>
            swal.fire({
                icon:'error',
                text:'falha ao cadastrar o produto',
                type:'success'
            }).then((okay)=>{
                if(okay){
                    window.location.href='../index.php';                 
                }
            });
        </script>";
    }
}

$mysqli->close();
?>