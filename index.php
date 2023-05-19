<!doctype html>
<html lang="pt-br">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
     <title>Quitanda Online :: Principal</title>
     <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
     <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
     <link rel="aplle-touch-icon" sizes="180x180" href="/img/favicon/aplle-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
     <link rel="manifest" href="/img/favicon/site.webmanifest">
     <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.sgv" color="#5bbad5">
     <link rel="shortcut icon" href="/img/favicon/favicon-icon">
     <meta name="msapplication-TileColor" content="#da532c">
     <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
     <meta name="thame-color" content="#ffffff">


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
                              <a href="#" class="nav-link text-white">Contatos</a>
                         </li>
                    </ul>


                    <div class="align-self-end">

                         <ul class="navbar-nav">

                              <li class="nav-item">
                                   <a href="#" class="nav-link text-white">Quero Me Cadastrar</a>
                              </li>

                              <li class="nav-item">
                                   <a href="#" class="nav-link text-white">Entrar</a>
                              </li>

                              <li class="nav-item">
                                   <a href="#" class="nav-link text-white">
                                        <svg class="bi" width="24" height="24" fill="currentColor">
                                             <use xlink:href="/bi.svg#cart3" />

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

               <ol class="carousel-indicators">
                    <li data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselMain" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselMain" data-bs-slide-to="2"></li>
               </ol>

               <div class="carousel-inner">
                    <div class="carousel-item active text-center" data-interval="3000">
                         <img src="/img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                         <img src="/img/slide01small.jpg" alt="" class="img-fluid    d-block d-md-none">
                    </div>

                    <div class="carousel-item text-center" data-interval="3000">
                         <img src="/img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                         <img src="/img/slide01small.jpg" alt="" class="img-fluid d-block d-md-none">
                    </div>

                    <div class="carousel-item text-center" data-interval="3000">
                         <img src="/img/slide01.jpg" alt="" class="img-fluid d-none d-md-block">
                         <img src="/img/slide01small.jpg" alt="" class="img-fluid d-block d-md-none">
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
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0  p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart-fill">
                                   </svg>
                              </a>
                              <img src="img/000001.jpg" alt="" class="card-img-top">
                              <div class="card-header ">

                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong>R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg class="bi" width="24" height="24" fill="currentColor">
                                        <use xlink:href="/bi.svg#suit-heart-fill">
                                   </svg>
                              </a>
                              <img src="img/000002.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong>R$ 6,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Abacaxi</h5>
                                   <p class="card-text truncate">
                                        Abacaxi da melhor qualidade, disponível
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000003.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000004.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <div>
                                        <button class="btn btn-light disabled" disabled>
                                             <small>Reabastecimento Estoque</small>

                                        </button>
                                   </div>
                                   <small class="text-danger"><strong>Produto Esgotado</strong></small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000005.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000006.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000007.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Banana Prata</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000008.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Abacate Cabasinha</h5>
                                   <p class="card-text truncate">
                                        Abacate Cabasinha da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000009.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 10,36</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Abóbora Cabotiã</h5>
                                   <p class="card-text truncate">
                                        Abóbora da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000010.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-half"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Abobrilha</h5>
                                   <p class="card-text truncate">
                                        Abobrinha da melhor qualidade possível,
                                        direto do produtor rural para sua mesa!
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000011.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 4,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Repolho</h5>
                                   <p class="card-text truncate">
                                        Repolho da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                         <div class="card text-center bg-light">
                              <a href="#" class="position-absolute right-0 p-2 text-danger">
                                   <svg width="24" height="24" fill="currentColor" class="bi float-end">
                                        <use xlink:href="/bi.svg#suit-heart">
                                   </svg>
                              </a>
                              <img src="img/000012.jpg" alt="" class="card-img-top">
                              <div class="card-header">
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>

                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star-fill"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star"></use>
                                   </svg>
                                   <svg width="24" height="24" fill="currentColor" class="bi text-warning">
                                        <use xlink:href="/bi.svg#star"></use>
                                   </svg>
                                   <p class="text-secondary p-2"><strong> R$ 3,50</strong></p>


                              </div>

                              <div class="card-body">
                                   <h5 class="card-title">Alho</h5>
                                   <p class="card-text truncate">
                                        Banana prata da melhor qualidade possível,
                                        direto do produtor rural para sua mesa
                                   </p>
                              </div>

                              <div class="card-footer">
                                   <form action="" class="d-block">
                                        <button class="btn btn-danger">
                                             Adicionar ao Carrinho
                                        </button>
                                   </form>
                                   <small class="text-success">320,5kg em estoque</small>
                              </div>

                         </div>

                    </div>


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

               <div class="row py-3">

                    <div class="col-12 col-md-4 text-center text-md-left text-secondary">
                         &copy;2023 - Quintanda Online Ltda Me<br>
                         Rua Virtual Inexistente, 171, Compulãndia/PC<br>
                         CNPJ 99.999.999/0001-99
                    </div>

                    <div class="col-12 col-md text-center">

                         <a href="privacidade.html" class="text-decoration-none text-secondary">Política de
                              Privacidade</a><br>
                         <a href="termos.php" class="text-decoration-none text-secondary">Termos de Usu</a><br>
                         <a href="quemsomos.php" class="text-decoration-none text-secondary">Quem Somos</a><br>
                         <a href="troca.php" class="text-decoration-none text-secondary">Troca e Devoluçôes</a>
                    </div>

                    <div class="col-12 col-md-4 text-center text-md-right">
                         <a href="contato" class="text-decoration-none text-secondary ">Contato pelo site</a><br>
                         <svg width="15" height="15" fill="currentColor" class="bi">
                              <use xlink:href="/bi.svg#envelope" class="text-primary">
                         </svg>
                         E-mail:<a href="danielsplira@gmail.com" class="text-decoration-none text-secondary">danielsplira@gmail.com</a><br>
                         <svg width="15" height="15" fill="currentColor" class="bi text-danger">
                              <use xlink:href="/bi.svg#telephone">
                         </svg>
                         Telefone:<a href="contato" class="text-decoration-none text-secondary">(19) 9 94078406</a><br>
                         <svg width="15" height="15" fill="currentColor" class="bi text-success">
                              <use xlink:href="/bi.svg#whatsapp">
                         </svg>
                         Whatsapp:<a href="contato" class="text-decoration-none text-secondary">(19) 9 94078406</a><br>


                    </div>

               </div>

          </div>

     </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="\node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script> 
</body>

</html>