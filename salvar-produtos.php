<?php
include "conexao.php";

$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$foto1 = $_POST["foto1"];
$foto2 = $_POST["foto2"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];
$valor = $_POST["valor"];
$estoque = $_POST["estoque"];


$sql_inserir_produtos = "insert into  produtos(titulo, foto, foto1, foto2, video, categoria, valor, estoque) values('$titulo','$foto','$foto1','$foto2 ', '$video ', '$categoria', '$valor','$estoque')";

$um_produtos = mysqli_query($conexao, $sql_inserir_produtos);



mysqli_close($conexao);


header("location:novo-produtos.php?msg=sucesso");

?>