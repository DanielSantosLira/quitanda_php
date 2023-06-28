<?php
include "menu.php";
?>



<main>
     <div class="container">
          <h1>Carrinho de Compras</h1>

          <hr>

          <?php
          include "conexao.php";

          $sql_buscar = "select * from carrinho";

          $todos_os_carrinho = mysqli_query($conexao, $sql_buscar);

          while ($um_carrinho = mysqli_fetch_assoc($todos_os_carrinho)) :

          ?>


               <ul class="list-group mb-3">

                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">

                                   <a href="#">
                                        <img src="<?php echo $um_carrinho["foto"]; ?>" class="img-thumbnail" alt="">
                                   </a>



                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4 class="text-decoration-none text-danger"><?php echo $um_carrinho["categoria"]; ?><b><a href="" class="text-decoration-none text-danger"></a></b></h4>
                                   <h4>
                                        <small><?php echo $um_carrinho["categoria 2"]; ?></small>
                                   </h4>

                              </div>
                              <div class="col-6 offset-6 col-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                   <div class="input-group">
                                        <button type="button" class="btn btn-outline-dark btn-sm">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                                  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
                                             </svg>
                                        </button>
                                        <input type="text" class="form-control text-center border-dark" value="4">
                                        <button type="button" class="btn btn-outline-dark btn-sm">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                                  <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
                                             </svg>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash " viewBox="0 0 16 16">
                                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                             </svg>
                                        </button>
                                   </div>
                                   <div class="text-right mt-2">
                                        <small class="text-secondary">Valor Kg:R$ <?php echo $um_carrinho["preco"]; ?></small><br>
                                        <small class="text-dark">Valor Item: R$ <?php echo $um_carrinho["preco"]; ?></small>
                                   </div>
                              </div>
                         </div>

                    </li>

               </ul>
          <?php
          endwhile;
          mysqli_close($conexao);
          ?>
     </div>

</main>