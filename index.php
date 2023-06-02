<!doctype html>
<html lang="pt-br">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
     <title>Quitanda Online :: Principal</title>


     <style>
          p.truncate {
               display: -webkit-box;
               -webkit-line-clamp: 3;
               -webkit-box-orient: vertical;
               overflow: hidden;
               text-overflow: ellipsis;
          }
     </style>


</head>


<body style="min-width:372px;">

     <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">

          <div class="container">


               <a href="#" class="navbar-brand"><strong>Quintanda Online</strong></a>

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">

                    <span class="navbar-toggler-icon"></span>

               </button>

               <div class="navbar-collapse collapse">

                    <ul class="navbar-nav flex-grow-1">

                         <li class="nav-item">
                              <a href="#" class="nav-link text-white">Principal</a>
                         </li>

                         <li class="nav-item">
                              <a href="contato.php" class="nav-link text-white">Contatos</a>
                         </li>
                    </ul>


                    <div class="align-self-end">

                         <ul class="navbar-nav">

                              <li class="nav-item">
                                   <a href="usuario.php" class="nav-link text-white">Quero Me Cadastrar</a>
                              </li>

                              <li class="nav-item">
                                   <a href="login.php" class="nav-link text-white">Entrar</a>
                              </li>

                              <li class="nav-item">
                                   <a href="carrinho.php" class="nav-link text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash text-whitgh" viewBox="0 0 16 16">
                                             <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                   </a>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </nav>

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

                                        <svg xmlns="<?php echo $um_produtos["foto3"]; ?>" width="24" height="24" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
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

                                        <a href="<?php echo $um_produtos["video"]; ?>" class="btn btn-danger">
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

     <div style="height: 273px;" class="d-block d-md-none"></div>
     <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
     <div style="height: 129px;" class="d-none d-lg-block"></div>


     <footer class="border-top fixed-bottom text-muted bg-light">

          <div class="container">

               <div class="row py-2">

                    <div class="col-12 col-md-4 text-center text-md-left text-secondary">
                         &copy;2023 - Quintanda Online Ltda Me<br>
                         Rua Virtual Inexistente, 171, Compulãndia/PC<br>
                         CNPJ 99.999.999/0001-99
                    </div>

                    <div class="col-12 col-md text-center">

                         <a href="privacidade.php" class="text-decoration-none text-secondary">Política de
                              Privacidade</a><br>
                         <a href="termos.php" class="text-decoration-none text-secondary">Termos de Usu</a><br>
                         <a href="quensomos.php" class="text-decoration-none text-secondary">Quem Somos</a><br>
                         <a href="troca.php" class="text-decoration-none text-secondary">Troca e Devoluçôes</a>
                    </div>

                    <div class="col-12 col-md-4 text-center text-md-right">
                         <a href="contato" class="text-decoration-none text-secondary ">Contato pelo site</a><br>
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                         </svg>
                         E-mail:<a href="danielsplira@gmail.com" class="text-decoration-none text-secondary">danielsplira@gmail.com</a><br>
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                         </svg>
                         Telefone:<a href="contato" class="text-decoration-none text-secondary">(19) 9 94078406</a><br>
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                         </svg>
                         Whatsapp:<a href="contato" class="text-decoration-none text-secondary">(19) 9 94078406</a><br>


                    </div>

               </div>

          </div>

     </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>