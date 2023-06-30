<?php
include "menu.php";
?>




<main>



     <div class="container">
          <div class="row justify-content-center">
               <form action="recuperacao-senha.php" method="post" class="col-sm-10 col-md-8 col-lg-6">
                    <h1 class="mb-3 ">Recuperação de Senha</h1>

               
                    <div class="form-floating mb-3">
                         <input type="text" class="form-control" autofocus id="email" placeholder=" ">
                         <label for="email">Digite seu E-mail</label>
                    </div>

                    <button class="btn btn-lg btn-danger" type="submit">Recuperar Senha</button>

                    <p class="mt-3">
                         Ainda não é cadastrado? <a href="cadastro.php">Clique aqui</a> para se
                         cadastrar.
                    </p>
                    <?php
                    $mesagem = $_GET["msg"] ?? "";
                    if ($mesagem == "sucesso") {
                         echo "<em class='alert alert-danger'>Usuário e senha cadastrado com sucesso</em>";
                    }

                    ?>

               </form>
          </div>
     </div>

</main>
<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>