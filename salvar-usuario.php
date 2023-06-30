<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$datanacimento = $_POST["datanacimento"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$complemento = $_POST["complemento"];
$referencia = $_POST["referencia"];
$numero =$_POST["numero"];
$cidade =$_POST["cidade"];
$Conf_Senha = $_POST["Conf_Senha"];


include "conexao.php";

$sql_inserir_usuario = "insert into usuario(nome, email, cpf, datanacimento, telefone, cep, rua, complemento, referencia, numero, cidade,Conf_Senha, senha) values('$nome','$email','$cpf','$datanacimento','$telefone','$cep','$rua','$complemento','$referencia','$numero','$cidade','" . md5($senha) . "','" . md5($senha) . "')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);

header("location:confirmar-usuario.php");
?>