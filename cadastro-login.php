<?php 
 include "menu.php";
?>




     <main>

          <div class="container">
               <div class="row justify-content-center">


                    <form action="login.php" method="post" class="col-sm-10 col-md-8 col-lg-6">
                         <h1 class="mb-3">Indentifique-se, por favor</h1>
                         <div class="form-floating mb-3">
                              <input type="email" class="form-control" autofocus aria-label="E-mail" name="email" id="email">
                              <label for="email">E-mail</label>
                         </div>
                         <div class="form-floating mb-3">
                              <input type="password" class="form-control" autofocus aria-label="Senha" name="senha" id="senha">
                              <label for="senha">Senha</label>
                         </div>
                         <div class="form-floating mb-3">
                              <input type="password" class="form-control" autofocus aria-label="Senha" name="Conf_Senha" id="Conf_Senha">
                              <label for="Conf-Senha">Confirme a Senha</label>
                         </div>
                         <div class="form-check mb-3">
                              <input type="checkbox" class="form-check-input" id="lembrar">
                              <label for="lembrar" class="form-check-label">Lembrar de mim</label>
                         </div>

                         <button class="btn btn-lg btn-danger me-2" type="submit">Entar</button>



                         <p class="mt-3">
                              Ainda não é casdastrado? <a href="novo-usuario.php">Clique aqui</a> para se
                              cadastar
                         </p>

                         <p class="mt-3">
                              Esqueseu sua senha?<a href="recuperar-senha.php">Clique aqui</a> para
                              recuperé-la.
                         </p>
                         <?php
                         $mesagem = $_GET["msg"] ?? "";
                         if ($mesagem == "erro") {
                              echo "<em class='text-danger'>Usuário ou senha inválida</em>";
                         }
                         ?>
                    </form>

               </div>
          </div>
     </main>


