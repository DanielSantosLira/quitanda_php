<?php
include "menu.php";
?>



<main>
     <div class="container">
          <div class="row justify-content-center">
               <form class="col-sm-10 col-md-8 col-lg-6">
                    <h1 class="mb-3 ">Cadastro Nova Senha</h1>

                    <div class="form-floating mb-3">

                         <input type="password" class="form-control" autofocus id="textNovaSenha" placeholder=" ">
                         <label for="textNovaSenha">Digite aqui nova senha</label>
                    </div>

                    <div class="form-floating mb-3">

                         <input type="password" class="form-control" autofocus id="textConfSenha" placeholder=" ">
                         <label for="textConfSenha">Repita a senha digitada acima</label>
                    </div>




                    <button class="btn btn-lg btn-danger" type="button" onclick="window.location.href='confirme-cadastro-senha.php'">Cadastrar Nova Senha</button>


               </form>
          </div>
     </div>

</main>

<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>