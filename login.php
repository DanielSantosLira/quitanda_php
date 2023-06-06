<?php
include "conexao.php";
$nome =  $_POST["nome"];
$email = $_POST["email"];
$senha = md5( $_POST["senha"]);
$confSenha = md5( $_POST["confSenha"]);


 $sql_buscar_usuario = "select * from usuario where email = '$email' and senha = '$senha'  and confSenha = '$confSenha'";

 $um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

 if($um_usuario->num_rows > 0){
    header("location:painel.php");

 }else{
    header("location:index.php?msg=erro");
 }
    mysqli_close($conexao);
?>