<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$datanacimento = $_POST["datanacimento"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];

include "conexao.php";

$sql_inserir_usuario = "insert into usuario(nome, email, cpf, datanacimento, telefone, cep,senha) values('$nome','$email','$cpf','$datanacimento','$telefone','$cep','" . md5($senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
?>