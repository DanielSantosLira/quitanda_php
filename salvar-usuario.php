<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$datanacimento = $_POST["datanacimento"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$numero =$_POST["numero"];
$complemento =$_POST["complemento"];
$cidade =$_POST["cidade"];

include "conexao.php";

$sql_inserir_usuario = "insert into usuario(nome, email, cpf, datanacimento, telefone, cep, rua, numero, complemento, cidade,Conf_Senha, senha) values('$nome','$email','$cpf','$datanacimento','$telefone','$cep','$rua','$numero','complemento','$cidade','" . md5($Conf_Senha) . "' ,'" . md5($senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
?>