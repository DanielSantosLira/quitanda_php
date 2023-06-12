<?php
$id = $_GET["id"];

include "conexao.php";

$sql_excluir_contato = "delete from contato where id = $id";

$contato_excluir = mysqli_query($conexao, $sql_excluir_contato);

mysqli_close($conexao);

header("location:listar-contato.php?msg=excluido");

?>