<?php
include "menu.php";
?>




<main>
     <div class="container">
          <div class="row justify-content-center">
               <form class="col-sm-10 col-md-8 col-lg-6">
                    <h1 class="mb-3 ">Recuperação de Senha</h1>

                    <div class="form-floating mb-3">
                         <input type="text" class="form-control" autofocus id="textEmail" placeholder=" ">
                         <label for="textNome">Digite seu e-mail</label>
                    </div>

                    <button class="btn btn-lg btn-danger" type="button" onclick="window.location.href='recuperacao-senha.php'">Recuperar Senha</button>

                    <p class="mt-3">
                         Ainda não é cadastrado? <a href="cadastro.php">Clique aqui</a> para se
                         cadastrar.
                    </p>


               </form>
          </div>
     </div>

</main>