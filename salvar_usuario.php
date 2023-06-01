<?php
include "conexao.php";

$id = $_GET["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$datanacimento = $_POST["datanacimento"];
$email = $_POST["email"];
$telefone = $_POST ["telefone"];
$cep = $_POST ["cep"];
$rua = $_POST ["rua"];
$numero =  $_POST ["numero"];
$complemento = $_POST ["complemento"];
$referencia =$_POST ["referencia"];
$senha = $_POST["senha"];
$confsenha = $_POST["confsenha"];


$sql_inserir_usuario = "insert into  usuario(nome, cpf, datanacimento, email, telefone,
cep, rua , numero , complemento,  senha, confsenha) values('$nome','$cpf', '$datanacimento',  '$email', '$telefone', '$cep', '$rua', '$numero','$complemento','referencia' ,'" . md5($senha) . " ," . md5($confsenha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);



mysqli_close($conexao);


header("location:confirmar_cadastro.php?msg=sucesso");

?>
