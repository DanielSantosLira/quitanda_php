<?php
$id = $_GET["id"];
$titulo = $_POST["titulo"];
$categoria = $_POST["categoria"];
$video = $_POST["video"];
$foto = $_POST["foto"];
$foto1 = $_POST["foto1"];
$foto2 = $_POST["foto2"];
$valor = $_POST["valor"];


include "conexao.php";

$sql_iditar_produtos = "update produtos set titulo= '$titulo', categoria='$categoria', video='$video' , foto='$foto', foto1='$foto1', foto2='$foto2', valor='$valor  where id = $id";

$um_produtos = mysqli_query($conexao, $sql_iditar_produtos);

header("location:listar-produtos.php?msg=sucesso");
?>


