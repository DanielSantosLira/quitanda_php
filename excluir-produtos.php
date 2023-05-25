<?php
$id = $_GET["id"];

include "conexao.php";

$sql_excluir_produtos = "delete from produtos where id = $id";

$jogo_excluir = mysqli_query($conexao, $sql_excluir_produtos);

mysqli_close($conexao);

header("location:listar-produtos.php?msg=excluido");

?>