<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$datanacimento = $_POST["datanacimento"];
$email = $_POST["email"];
$telefone = $_POST ["telefone"];
$cep = $_POST ["cep"];
$rua = $_POST ["rua"];
$numero =  $_POST["numero"];
$complemento = $_POST["complemento"];
$referencia =$_POST["referencia"];
$senha = $_POST["senha"];
$Conf_Senha = $_POST["Conf_Senha"];

include "conexao.php";

$sql_inserir_usuario = "insert into  usuario(nome, cpf, datanacimento, email, telefone, cep, rua, numero, complemento, referencia,  senha, Conf_Senha) values('values('$nome', '$cpf','$datanacimento', '$email', '$telefone', '$cep', '$rua','$numero','$complemento','$referencia' ,'" . md5($senha) ."' , '" . md5($Conf_Senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
?>
