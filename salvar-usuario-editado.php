<?php
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
$cidade =$_POST ["cidade"];


include "conexao.php";

$sql_iditar_usuario = "update usuario set nome= '$nome', cpf='$cpf', datanacimento='$datanacimento', email='$email', telefone='$telefone', cep='$cep',  numero='$numero', complemento='$complemento', cidade='$cidade',  senha='".md5($senha)." Conf_Senha='".md5($Conf_Senha)."' where id = $id";

  
$um_usuario = mysqli_query($conexao, $sql_iditar_usuario);

header("location:listar-usuario.php?msg=sucesso");
?>

