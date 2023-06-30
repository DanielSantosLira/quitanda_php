<?php include "menu.php";?>
    


     <?php
     $id = $_GET['id'];
     $nome = $cpf  = $datadenacimento = $email = $telefone = $cep = $rua = $numero = $complemento = $referencia = "";
     include "conexao.php";
     $sql_buscar = "select * from usuario  where id = $id";
     $todos_os_usuario = mysqli_query($conexao, $sql_buscar);
     while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)):
          $nome = $um_usuario["nome"];
          $cpf = $um_usuario["cpf"];
          $datanacimento = $um_usuario["datanacimento"];
          $email = $um_usuario["email"];
          $telefone = $um_usuario["telefone"];
          $cep = $um_usuario["cep"];
          $rua = $um_usuario["rua"];
          $numero = $um_usuario["numero"];
          $complemento = $um_usuario["complemento"];
          $referencia = $um_usuario["referencia"];
        
          
         
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
               <h3>Titulo:</h3>
               <h3><?php echo $nome; ?> </h3>
               <p><?php echo  $cpf; ?></p>

          </div>
          <div class="col-12">
               <h3>Titulo: <?php echo  $datanacimento; ?> </h3>
               <p><?php echo $email; ?></p>

          </div>
          <div class="col-12">
               <h2>Titulo: </h2>
               <h3><?php echo   $telefone; ?></h3>
               <p><?php echo $cep; ?></p>

          </div>
          <div class="col-12">
               <h3>Titulo: <?php echo    $rua; ?> </h3>
               <p><?php echo  $numero; ?></p>

          </div>
          <div class="col-12">
               <h3>Titulo: <?php echo    $complemento; ?> </h3>
               <p><?php echo  $referencia; ?></p>

          </div>

          <div class="col-12">
               <a href="listar-usuario.php" class="btn btn-light btn-outline-danger">Voltar</a>
          </div>
     </div>



     <div style="height: 273px;" class="d-block d-md-none"></div>
     <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
     <div style="height: 129px;" class="d-none d-lg-block"></div>


  