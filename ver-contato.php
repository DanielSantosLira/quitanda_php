<?php
include "menu.php";
?>
   

     <?php
     $id = $_GET['id'];
     $nome = $email = $msg = "";
     include "conexao.php";
     $sql_buscar = "select * from contato  where id = $id";
     $todos_os_contato = mysqli_query($conexao, $sql_buscar);
     while ($um_contato = mysqli_fetch_assoc($todos_os_contato)):
          $nome = $um_contato["nome"];
     
          $email = $um_contato["email"];
         
          $msg = $um_contato["msg"];
        
          
         
     endwhile;
     mysqli_close($conexao);
     ?>

     <div class="container mt-3">
          <div class="col-12">
               <h6>
                    Detalhe do Contato Cód.: <?php echo $id; ?>
               </h6>
          </div>
          <div class="col-12">
               <h3>Titulo: <?php echo $nome; ?> </h3>
               <p><?php echo  $email; ?></p>

          </div>
          <div class="col-12">
               
               <p><?php echo $msg; ?></p>

          </div>
          
          <div class="col-12">
               <a href="listar-contato.php" class="btn btn-light btn-outline-danger">Voltar</a>
          </div>
     </div>



     <div style="height: 273px;" class="d-block d-md-none"></div>
     <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
     <div style="height: 129px;" class="d-none d-lg-block"></div>


    