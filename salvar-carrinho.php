<?php
include "conexao.php";

$nome = $_POST["nome"];
$foto = $_POST["foto"];
$quantidade = $_POST["quantidade"];
$preco = $_POST["preco"];



$sql_inserir_carrinho = "insert into  carrinho(nome, foto, preco, quantidade) values('$nome','$foto','$preco','$quantidade '";

$um_carrinho = mysqli_query($conexao, $sql_inserir_carrinho);



mysqli_close($conexao);


header("location:novo-produtos.php?msg=sucesso");

?>