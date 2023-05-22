<!doctype html>
<html lang="pt-br">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
               <h1>Informe seus dados, por favor.</h1>
               <hr class="mt-3">

               <form action="">
                    <div class="row">

                         <div class="col-12 col-md-6">
                              <fieldset class="row">
                                   <legend>Dados Pessoais</legend>
                                   <div class="mb-3">
                                        <label for="txtNome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="textNome" required required placeholder="Digite seu Nome">
                                   </div>
                                   <div class="mb-3 col-md-6 col-xl-4">
                                        <label for="txtCPF" class="form-label">CPF</label>
                                        <span class="form-text">(somente número)</span>
                                        <input type="text" class="form-control" id="textCPF" required placeholder="Digite seu CPF">
                                   </div>
                                   <div class="mb-3 col-md-6 col-xl-4">
                                        <label for="txtNascimento" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="txtNascimento" required>
                                   </div>
                              </fieldset>
                              <fieldset>
                                   <legend>Contatos</legend>
                                   <div class="mb-3 col-md-8">
                                        <label for="txtEmail" class="form-label">E-mail</label>
                                        <input type="text" class="form-control" id="txtEmail" required placeholder="Digite seu E-mail">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="txtTelefone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="txtTelefone" required placeholder="(xx) xxxxx-xxxx">
                                        <span class="form-text">(com DDD, somente número)</span>
                                   </div>

                              </fieldset>
                         </div>
                         <div class="col-sm-12 col-md-6">
                              <fieldset class="row">
                                   <legend>Endereço</legend>
                                   <div class="mb-3 col-md-6 col-lg-4">
                                        <label for="txtCEP" class="form-label">CEP</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control" id="txtCEP">
                                             <span class="input-group-text p-1">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                                       <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                                  </svg>
                                             </span>
                                        </div>
                                   </div>
                                   <div class="mb-3 col-md-6 col-lg-8 align-self-end">
                                        <textarea class="form-control text-muted bg-light" style="height:68px;">Digite o CEP para buscamos o endereço.</textarea>
                                   </div>
                                   <div class="mb-3 col-md-4">
                                        <label for="txtNumero" class="form-label">Número</label>
                                        <input type="text" class="form-control" id="textNumero">
                                   </div>
                                   <div class="mb-3 col-md-8">
                                        <label for="txtComplemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" id="textComplemento">
                                   </div>
                                   <div class="mb-3">
                                        <label for="txtReferencia" class="form-label">Referência</label>
                                        <input type="text" class="form-control" id="textReferencia">
                                   </div>
                              </fieldset>
                              <fieldset>
                                   <legend>Senha de Acesso</legend>
                                   <div class="mb-3">
                                        <label for="txtSenha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="textSenha">
                                   </div>
                                   <div class="mb-3">
                                        <label for="txtConfSenha" class="form-label">Confimação da Senha</label>
                                        <input type="text" class="form-control" id="textConfSenha">
                                   </div>
                              </fieldset>
                         </div>
                    </div>
                    <hr class="mt-3">
                    <div class="form-check mb-3">
                         <input type="checkbox" class="form-check-input" value="" id="chkPromocoes">
                         <label for="chkPromocoes" class="form-check-label">Desejo receber ínformações sobre promoções.</label>
                    </div>
                    <div class="mb-3">
                         <a href="index.html" class="btn btn-light btn-outline-danger">Cancelar</a>
                         <input type="button" value="Criar meu cadastro" class="btn btn-danger" onclick="window.location.href='confirmar-cadstro.php'">
                    </div>
               </form>
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