<?php
include "conexao.php";
$nome =  $_POST["nome"];
$email = $_POST["email"];
$senha = md5( $_POST["senha"]);
$Conf_Senha = md5( $_POST["conf_Senha"]);


 $sql_buscar_usuario = "select * from usuario where email = '$email' and senha = '$senha'  and Conf_Senha = '$Conf_Senha'";

 $um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

 if($um_usuario->num_rows > 0){
    header("location:painel.php");

 }else{
    header("location:index.php?msg=erro");
 }
    mysqli_close($conexao);
?>