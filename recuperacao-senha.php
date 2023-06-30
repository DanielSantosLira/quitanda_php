<?php
include "menu.php";
?>
<?php

$email = 'email';
$senha = 123;
$Conf_Senha = 123;


include "conexao.php";

$sql_iditar_usuario = "UPDATE usuario set  senha=md5($senha) , Conf_Senha=md5($Conf_Senha) where email = $email";

$um_usuario = mysqli_query($conexao, $sql_iditar_usuario);


?>


     <div class="container">
          <h1>Instruções Enviadas!</h1>
          <hr>
          <p class="mt-3">
               caro sua Nova <?php echo $senha ?> 
          </p>
          <p class="mt-3">
               As instruções para a recuperação de cadastro de uma nova senha foram enviadas para o
               e-mail <b>email@dominio.com.br</b>. Abra a mensagem que lhe enviamos e siga as
               instruções para cadastrar uma nova senha.
          </p>

          <p class="mt-3">
               Agradecemos pela confiança em nossos serviços.

          </p>
          <p class="mt-3">
               Cordialmente, <br>
               Cental de Relacionamento Quitanada Onlíne.
          </p>
          <p class="mt-3">
               <a href="index.php">Voltar á Página Principal</a>

          </p>
     </div>

</main>
<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>