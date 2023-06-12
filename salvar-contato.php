<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$msg =$_POST["msg"];

include "conexao.php";

$sql_inserir_contato = "insert into contato(nome, email, msg) values('$nome','$email','$msg')";

$um_contato = mysqli_query($conexao, $sql_inserir_contato);

mysqli_close($conexao);

header("location:confirmar-contato.php?msg=sucesso");
?>