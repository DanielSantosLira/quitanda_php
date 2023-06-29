<?php
include "menu.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Lista de Contato</h1>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table  table-hover-warning tabla-striped ">

                            <tr class="bg-danger text-white">
                                <td>id</td>
                                <td>Nome</td>
                                <td>Email</td>
                                <td>Mensagem</td>
                                <td>Ver</td>
                                <td>Excluir</td>


                            </tr>


                            <?php
                            include "conexao.php";
                            $sql_buscar = "select * from contato";

                            $todos_os_contato = mysqli_query($conexao, $sql_buscar);

                            while ($um_contato = mysqli_fetch_assoc($todos_os_contato)) :
                            ?>
                                <tr>

                                    <td><?php echo $um_contato["id"]; ?></td>
                                    <td><?php echo $um_contato["nome"]; ?></td>
                                    <td><?php echo $um_contato["email"]; ?></td>
                                    <td><?php echo $um_contato["msg"]; ?></td>




                                    <td>
                                        <a href="ver-contato.php?id=<?php echo $um_contato["id"]; ?>" class="btn btn-light btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>

                                        </a>

                                    </td>

                                    <td>
                                        <a href="excluir-contato.php?id=<?php echo $um_contato["id"]; ?>" class="btn btn-light btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-denger" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>

                                        </a>
                                    </td>
                                </tr>


                            <?php
                            endwhile;
                            mysqli_close($conexao);
                            ?>

                        </table>
                        <div class="col-12">
                            <a href="painel.php" class="btn btn-light btn-outline-danger">Voltar</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>


 