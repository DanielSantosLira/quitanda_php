<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET['id'];
 $nome = $cpf  = $datadenacimento = $email = $telefone = $cep = $rua = $numero = $complemento = $referencia = $senha = $conf_senha = "";
include "conexao.php";
$sql_buscar = "select * from usuario  where id = $id";
$todos_os_usuario= mysqli_query($conexao, $sql_buscar);
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
            Detalhe do Usuário Cód.: <?php echo $id; ?>
        </h6>
    </div>
    <div class="col-12">
        <h3>Titulo: <?php echo $nome; ?> </h3>
        <p><?php echo $email;?></p>
        
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>