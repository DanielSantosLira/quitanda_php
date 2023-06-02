<!doctype html>
<html lang="pt-br">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/banana-favicon.png" type="image/x-icon">
    <title>Quitanda Online :: Listar-Produtos</title>


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
            <div class="row">
                <div class="col">
                    <h1>Lista de produtos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-hover-warning tabla-striped">
                        <thead class="">
                            <tr class="table-primary">
                                <td>Codigo</td>
                                <td>Título</td>
                                <td>foto</td>
                                <td>Categoria</td>
                                <td>Estoque</td>
                                <td>valor</td>
                                <td>Produtos</td>
                                <td>Editar</td>
                                <td>Deletar</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "conexao.php";
                            $sql_buscar = "select * from produtos";

                            $todos_os_produtos = mysqli_query($conexao, $sql_buscar);

                            while ($um_produtos = mysqli_fetch_assoc($todos_os_produtos)) :
                            ?>
                                <tr>
                                    <td><?php echo $um_produtos["id"]; ?></td>
                                    <td><?php echo $um_produtos["titulo"]; ?></td>
                                    <td><?php echo $um_produtos["foto"]; ?></td>
                                    <td><?php echo $um_produtos["categoria"]; ?></td>
                                    <td><?php echo $um_produtos["estoque"]; ?></td>
                                    <td><?php echo $um_produtos["valor"]; ?></td>
                                    
                                    <td>
                                        <a href="ver-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class=" btn text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>

                                        </a>

                                    </td>
                                    <td>
                                        <a href="editar-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class="btn  text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="excluir-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class=" btn bg-danger text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-denger" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>

                                        </a>
                                    </td>
                                </tr>

                        </tbody>
                    <?php
                            endwhile;
                            mysqli_close($conexao);
                    ?>

                    </table>

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