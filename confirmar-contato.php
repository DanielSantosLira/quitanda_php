<?php
include "menu.php";
?>


<main>
<?php
     
     $nome =  "";
     include "conexao.php";
     $sql_buscar = "SELECT * FROM contato ORDER BY id DESC LIMIT 1";
     $todos_os_contato = mysqli_query($conexao, $sql_buscar);
     while ($um_contato = mysqli_fetch_assoc($todos_os_contato)):
          $nome = $um_contato["nome"];
         
         
         
          
         
     endwhile;
     mysqli_close($conexao);
     ?>
     <div class="container">
          <h1>Mensagem Recibida!</h1>
          <hr>
          <p>
               Caro Cliente, <?php echo $nome; ?>
          </p>
          <p>
               Informamos que sua mansagem foi recebida com sucesso por nossa central de
               relacionamento com clientes e que em até <b>2 dias úteis</b> ela será respondida.
               Para evitarmos problema de comunicação, evite reeviar esta mesma mensagem
               dentro do prazo de resposta.
          </p>
          <p>
               Agradecemos pela confiança em nosso serviços.
          </p>
          <p>
               Condialmente,<br>
               Central de Relacionamento Quitanda Onlíne.
          </p>


          <a href="index.php" class="btn btn-light btn-outline-danger">Voltar</a>
     </div>


</main>