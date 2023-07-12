<?php
include "menu.php";
?>

<div class="container">
     <div class="row mt-3">
          <div class="col-12 text-center">
               <h1>Cadastrar Novo Produto</h1>
          </div>
     </div>
     <div class="row mt-3">
          <div class="col-12">
               <form action="salvar-produtos.php" method="post">
                    <div class="col-5 mx-auto">
                         <input type="text" name="titulo" class="form-control me-2" required placeholder="Titulo"> <br>
                         <input type="foto" name="foto" class="form-control me-2" required placeholder="foto"> <br>
                         <input type="foto1" name="foto1" class="form-control me-2" required placeholder="foto1"> <br>
                         <input type="foto2" name="foto2" class="form-control me-2" required placeholder="foto2"> <br>
                         <input type="video" name="video" class="form-control me-2" required placeholder="video"> <br>
                         <input type="categoria" name="categoria" class="form-control me-2" required placeholder="categoria"> <br>
                         <input type="valor" name="valor" class="form-control me-2" required placeholder="valor"> <br>
                         <input type="estoque" name="estoque" class="form-control me-2" required placeholder="estoque"> <br>

                         <button type="submit" class="btn btn-light btn-outline-primary">Salvar Produto</button>
                         <a href="painel.php" class="btn btn-light btn-outline-success">Voltar</a>

                         <?php
                         $mesagem = $_GET["msg"] ?? "";
                         if ($mesagem == "sucesso") {
                              echo "<em class='alert alert-danger'>Produto cadastrado com sucesso</em>";
                         }
                         ?>

                    </div>


               </form>
          </div>
     </div>
</div>

<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>