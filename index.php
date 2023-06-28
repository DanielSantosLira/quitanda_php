<?php
include "menu.php"
?>











<header class="container">
     <div id="carouselMain" class="carousel carousel-white slide " data-ride="carousel">

          <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>

          </div>


          <div class="carousel-inner">
               <div class="carousel-item active text-center" data-interval="3000">
                    <img src="img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                    <img src="img/slide01small.jpg" alt="" class="img-fluid    d-block d-md-none">
               </div>

               <div class="carousel-item text-center" data-interval="3000">
                    <img src="img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                    <img src="img/slide01small.jpg" alt="" class="img-fluid d-block d-md-none">
               </div>

               <div class="carousel-item text-center" data-interval="3000">
                    <img src="img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                    <img src="img/slide01small.jpg" alt="" class="img-fluid d-block d-md-none">
               </div>

          </div>

          <a class="carousel-control-prev" href="#carouselMain" role="button" data-bs-slide="prev">
               <span class="carousel-control-prev-icon"></span>
               <span class="visually-hidden">Proximo</span>

          </a>

          <a class="carousel-control-next" href="#carouselMain" role="button" data-bs-slide="next">
               <span class="carousel-control-next-icon"></span>
               <span class="visually-hidden">Proximo</span>

          </a>
     </div>

     <hr class="mt-3" />

</header>

<main>
     <div class="container">
          <div class="row">

               <div class="col-12 col-md-5">
                    <form action="" class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                         <div class="input-group input-group-sm">
                              <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                              <button class="btn btn-danger">Buscar</button>
                         </div>
                    </form>
               </div>

               <div class="col-12 col-md-7">

                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

                         <form action="" class="ml-3 d-inline-block">

                              <select name="" id="" class="form-select form-select-sm">
                                   <option value="">Ordernar pelo nome</option>
                                   <option value="">Ordernar pelo menor preço</option>
                                   <option value="">Ordernar pelo maior preço</option>
                              </select>

                         </form>

                         <nav class="d-inline-block">

                              <ul class="pagination pagination-sm my-0">

                                   <li class="page-item">
                                        <button class="page-link">1</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">2</button>
                                   </li>

                                   <li class="page-item disabled">
                                        <button class="page-link">3</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">4</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">5</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">6</button>
                                   </li>
                              </ul>

                         </nav>

                    </div>

               </div>

          </div>

          <hr class="mt-3">

          <div class="row g-3">
               <?php
               include "conexao.php";

               $sql_buscar = "select * from produtos";

               $todos_os_produtos = mysqli_query($conexao, $sql_buscar);

               while ($um_produtos = mysqli_fetch_assoc($todos_os_produtos)) :
               ?>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0  p-2 text-danger">
                                   <svg xmlns="<?php echo $um_produtos["foto1"]; ?>" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                        <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z" />
                                   </svg>
                              </a>
                              <img src="<?php echo $um_produtos["foto"]; ?>" alt="" class="card-img-top">
                              <div class="card-header ">

                                   <svg xmlns="<?php echo $um_produtos["foto2"]; ?>" width="24" height="24" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                   </svg>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                   </svg>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                                        <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                   </svg>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star text-warning" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                   </svg>
                                   <p class="text-secondary p-2"><strong><?php echo $um_produtos["valor"]; ?></strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title"><?php echo $um_produtos["titulo"]; ?></h5>
                                   <p class="card-text truncate">
                                        <?php echo $um_produtos["categoria"]; ?>

                                   </p>
                              </div>

                              <div class="card-footer">

                                   <a href="carrinho.php?add=carrinho&id='$carrinho['id']" class="btn btn-danger">
                                        Adicionar ao Carrinho
                                   </a>

                                   <small class="text-success"><?php echo $um_produtos["estoque"]; ?></small>
                              </div>

                         </div>

                    </div>



               <?php
               endwhile;
               mysqli_close($conexao);
               ?>
          </div>
          <hr class="mt-3">
          <div class="row pb-4 pb-3">
               <div class="col-12">

                    <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">

                         <form action="" class="ml-3 d-inline-block">

                              <select name="" id="" class="form-select form-select-sm">
                                   <option value="">Ordernar pelo nome</option>
                                   <option value="">Ordernar pelo menor preço</option>
                                   <option value="">Ordernar pelo maior preço</option>
                              </select>

                         </form>

                         <nav class="d-inline-block">

                              <ul class="pagination pagination-sm my-0">

                                   <li class="page-item">
                                        <button class="page-link">1</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">2</button>
                                   </li>

                                   <li class="page-item disabled">
                                        <button class="page-link">3</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">4</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">5</button>
                                   </li>

                                   <li class="page-item">
                                        <button class="page-link">6</button>
                                   </li>
                              </ul>

                         </nav>


                    </div>
               </div>

          </div>

</main>