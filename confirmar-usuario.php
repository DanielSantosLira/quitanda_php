<?php
include "menu.php";
include "conexao.php"
?>


        <div class="container">

            <a href="#" class="navbar-brand"><strong>Quintanda Online</strong></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="navbar-collapse collapse">

                <ul class="navbar-nav flex-grow-1">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white">Principal</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Contatos</a>
                    </li>
                </ul>

    <main>
      
     
    <?php
     
     $nome = $email =  "";
     include "conexao.php";
     $sql_buscar = "SELECT * FROM usuario ORDER BY id DESC LIMIT 1";
     $todos_os_usuario = mysqli_query($conexao, $sql_buscar);
     while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)):
          $nome = $um_usuario["nome"];
         
          $email = $um_usuario["email"];
         
          
         
     endwhile;
     mysqli_close($conexao);
     ?>

          <div class="container">
            
        
               <h1>Confirmaçao de Cadastro : </h1>
               <hr>
              
               <p  class="mt-3">
                    Caro  <b><?php echo $nome; ?></b>
               </p>
               <p class="mt-3">
                    Obrigado por se cadastrar em nossa loja virtual.  Um e-mail de confirmação foi enviado
                    para <b><?php echo $email; ?></b>.Agora faça seo login no link abaixo
                    
               </p>

               <p class="mt-3">
                    Desede já agradecemos pela confiança em nosso serviço.
                    central de Relacionamento Quitanda Onlíne

               </p>
               <p class="mt-3">
               
                    <a href="cadastro-login.php" class="btn btn-danger">Faça seu Login</a>
               </p>
              
          </div>

     </main>

  