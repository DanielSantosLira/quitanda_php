<!doctype html>
<html lang="pt-br">

<head>


     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
     <title>Quitanda Online :: Carrinho de Compras</title>


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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash text-whitgh" viewBox="0 0 16 16">
                                             <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </nav>
     <main>
          <div class="container">

               <h1>Carrinho de Compras</h1>
               <hr>
               <ul class="list-group mb-3">
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000008.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000009.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abobora</a></b></h4>
                                   <h4>
                                        <small>Abobora da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000001.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000002.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000006.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000005.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="row g-3">
                              <div class="col-4 col-md-3 col-lg-2">
                                   <a href="#">
                                        <a href="#">
                                             <img src="img/000004.jpg" class="img-thumbnail" alt="">
                                        </a>
                                   </a>


                              </div>
                              <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                   <h4><b><a href="" class="text-decoration-none text-danger">Abacate Manteiga</a></b></h4>
                                   <h4>
                                        <small>Abacate manteiga da melhor qualidade possível e muito fresco.</small>
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
                                        <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                        <small class="text-dark">Valor Item: R$ 7,98</small>
                                   </div>
                              </div>
                         </div>

                    </li>
                    <li class="list-group-item py-3">
                         <div class="text-right">
                              <h4 class="text-dark mb-3">Valor Total: R$ 7,98</h4>

                              <a href="index.php" class="btn btn-outline-success btn-lg">Continuar comprando</a>

                              <button class="btn btn-danger btn-lg">Fechar Compra</button>

                         </div>

                    </li>
               </ul>

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

                         <a href="privacidade.html" class="text-decoration-none text-secondary">Política de
                              Privacidade</a><br>
                         <a href="termos.html" class="text-decoration-none text-secondary">Termos de Usu</a><br>
                         <a href="quensomos.html" class="text-decoration-none text-secondary">Quem Somos</a><br>
                         <a href="troca.html" class="text-decoration-none text-secondary">Troca e Devoluçôes</a>
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

     <script src="\node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script>
</body>

</html>