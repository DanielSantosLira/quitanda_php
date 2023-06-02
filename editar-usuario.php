<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET['id'];
$nome = $cpf  = $datadenacimento = $email = $telefone = $cep = $rua = $numero = $complemento = $referencia = $senha = $conf_senha = "";
include "conexao.php";
$sql_buscar = "select * from usuario  where id = $id";
$todos_os_usuario = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
    $nome = $um_usuario["nome"];
    $cpf = $um_usuario["cpf "];
    $datadenacimento =$um_usuario["datadenacimento"];
    $email =$um_usuario["email"];
    $telefone =$um_usuario["telefone"];
    $cep =$um_usuario["cep"];
    $rua =$um_usuario["rua"];
    $numero =$um_usuario["numero"];
    $complemento =$um_usuario["complemento"];
    $referencia =$um_usuario["referencia"];
    $senha =$um_usuario["senha"];
    $conf_senha =$um_usuario["conf_senha"];
    
endwhile;
mysqli_close($conexao);
?>

<div class="container mt-3">
    <div class="col-12">
        <h6>
            Editar do usuario Cód.: <?php echo $id; ?>
        </h6>
    </div>
    <div class="col-12">
        <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Nome</label><input name="nome" value="<?php echo $nome; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                E-mail <input name="email" value="<?php echo $email; ?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Senha</label> <input type="password" name="senha" value="<?php echo $senha; ?>" class="form-control">
            </div>
          
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>



        