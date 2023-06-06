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
     

     <main>
          <div class="container">
               <h1>Informe seus dados, por favor.</h1>
               <hr class="mt-3">
               <form action="salvar-usuario.php" method="post">
                    <div class="row">
                         <div class="col-12 col-md-6">
                              <fieldset class="row">
                                   <legend>Dados Pessoais</legend>
                                   <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome"  required  placeholder="Digite seu Nome">
                                   </div>
                                   <div class="mb-3 col-md-6 col-xl-4">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <span class="form-text">(somente número)</span>
                                        <input type="text" class="form-control" name="cpf" required placeholder="Digite seu CPF">
                                   </div>
                                   <div class="mb-3 col-md-6 col-xl-4">

                                        <label for="datanacimento" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="datanacimento" required>
                                   </div>
                              </fieldset>
                              <fieldset>
                                   <legend>Contatos</legend>
                                   <div class="mb-3 col-md-8">
                                        <label for="email" class="form-label">E-mail</label>
                                        <div class="input-group">
                                             <span class="input-group-text p-1">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                                       <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                                                       <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                                                  </svg>
                                             </span>
                                             <input type="email" name="email" class="form-control" required placeholder="Digite seu E-mail">


                                        </div>
                                   </div>
                                   <div class="mb-3 col-md-6 col-lg-4">

                                        <label for="telefone" class="form-label">Telefone</label>
                                        <div class="input-group">
                                             <span class="input-group-text p-1">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                       <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                  </svg>
                                             </span>
                                             <input type="tel" class="form-control" name="telefone"  required placeholder="(xx) xxxxx-xxxx">

                                             <span class="form-text">(com DDD, somente número)</span>
                                        </div>
                                   </div>

                              </fieldset>
                         </div>
                         <div class="col-sm-12 col-md-6">
                              <fieldset class="row">
                                   <legend>Endereço</legend>
                                   <div class="mb-3 col-md-6 col-lg-4">
                                        <label for="cep" class="form-label">CEP</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control" name="cep">
                                             <span class="input-group-text p-1">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                                       <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                                  </svg>
                                             </span>
                                        </div>
                                   </div>
                                   <div class="mb-3 col-md-6 col-lg-8 align-self-end">
                                        <label for="rua" class="form-label">Rua</label>
                                        <input type="text" class="form-control" name="rua">
                                   </div>
                                   <div class="mb-3 col-md-4">
                                        <label for="numero" class="form-label">Número</label>
                                        <input type="number" class="form-control" name="numero" required>
                                   </div>
                                   <div class="mb-3 col-md-8">
                                        <label for="complemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" name="complemento" required >
                                   </div>
                                   <div class="mb-3">
                                        <label for="referencia" class="form-label">Referência</label>
                                        <input type="text" class="form-control" name="referencia" required>
                                   </div>
                              </fieldset>
                              
                              <fieldset>
                                   <legend>Senha de Acesso</legend>
                                   <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" name="senha" required >
                                   </div>
                                   <div class="mb-3">
                                        <label for="Conf_senha" class="form-label">Confimação da Senha</label>
                                        <input type="password" class="form-control" name="Conf_Senha" required>
                                   </div>
                              </fieldset>
                         </div>
                    </div>
                    <hr class="mt-3">
                    <div class="form-check mb-3">
                         <input type="checkbox" class="form-check-input"  name="chkPromocoes">
                         <label for="chkPromocoes" class="form-check-label">Desejo receber ínformações sobre promoções.</label>
                    </div>
                    <div class="mb-3">
                         <a href="index.html" class="btn btn-light btn-outline-danger">Cancelar</a>
                         <button type="submit" class="btn btn-danger">Salvar Usuário</button>

                         <?php
                        $mesagem = $_GET["msg"] ?? "";
                        if ($mesagem == "sucesso") {
                            echo "<em class='alert alert-primary'>Usuário e senha cadastrado com sucesso</em>";
                        }
                        ?>
                    </div>
               </form>
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