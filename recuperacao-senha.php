<?php
include "menu.php";
?>



<main>
     <?php
     include "conexao.php";

     $email = $_POST["email"];
     $senha = md5($_POST["senha"]);
     $Conf_Senha = md5($_POST["Conf_Senha"]);


     $sql_buscar_usuario = "update * from usuario where email = '$email' and senha = '$senha' and conf_Senha = '$Conf_Senha'";

     $um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

     if ($um_usuario->num_rows > 0) {
          header("location:painel.php");
     } else {
          header("location:cadastro-login.php?msg=erro");
     }
     mysqli_close($conexao);
     ?>

     <div class="container">
          <h1>Instruções Enviadas!</h1>
          <hr>
          <p class="mt-3">
               caro <strong>Cliente</strong>
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