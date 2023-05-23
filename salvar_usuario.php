<?php
include "conexao.php";


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nacimento = $_POST["data_nacimento"];
$email = $_POST["email"];
$telefone = $_POST ["telefone"];
$cep = $_POST ["cep"];
$rua = $_POST ["rua"];
$numero =  $_POST ["numero"];
$complemento = $_POST ["complemento"];
$referencia = $_POST ["referencia"];
$senha = $_POST["senha"];
$conf_senha = $_POST["conf_senha"];

$sql_inserir_usuario = "insert into  usuario(nome, cpf, data_nacimento, email, telefone,
cep,rua , numero , complemento, referencia, senha, conf_senha) values('$nome','$cpf', '$data_nacimento',  '$email', '$telefone', '$cep', '$rua', '$numero','$complemento','$referencia','" . md5($senha) . " ," . md5($conf_senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);



mysqli_close($conexao);


header("location:confirmar_cadastro.php?msg=sucesso");

?>
