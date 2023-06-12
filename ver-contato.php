<!doctype html>
<html lang="pt-br">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
     <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
     <title>Quitanda Online :: Cadastro</title>




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
                              <a href="index.php" class="nav-link text-white">Principal</a>
                         </li>

                         <li class="nav-item">
                              <a href="contato.php" class="nav-link text-white">Contatos</a>
                         </li>
                    </ul>


                    <div class="align-self-end">

                         <ul class="navbar-nav">

                              <li class="nav-item">
                                   <a href="cadastro.php" class="nav-link text-white">Quero Me Cadastrar</a>
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


     <footer class="border-top fixed-bottom text-muted bg-light">

          <div class="container">

               <div class="row py-3">

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
</body>

</html>