<?php
include "menu.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Lista de Usuário</h1>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table  table-hover-warning tabla-striped ">

                            <tr class="bg-danger text-white">
                                <td>id</td>
                                <td>Nome</td>
                                <td>CPF</td>
                                <td>Email</td>
                                <td>Telefone</td>
                                <td>CEP</td>
                                <td>Rua</td>
                                <td>Numero</td>
                                <td>Cidade</td>
                                <td>Ver</td>
                                <th>Editar</td>
                                <td>Deletar</td>

                            </tr>


                            <?php
                            include "conexao.php";
                            $sql_buscar = "select * from usuario";

                            $todos_os_usuario = mysqli_query($conexao, $sql_buscar);

                            while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
                            ?>
                                <tr>

                                    <td><?php echo $um_usuario["id"]; ?></td>
                                    <td><?php echo $um_usuario["nome"]; ?></td>
                                    <td><?php echo $um_usuario["cpf"]; ?></td>
                                    <td><?php echo $um_usuario["email"]; ?></td>
                                    <td><?php echo $um_usuario["telefone"]; ?></td>
                                    <td><?php echo $um_usuario["cep"]; ?></td>
                                    <td><?php echo $um_usuario["rua"]; ?></td>
                                    <td><?php echo $um_usuario["numero"]; ?></td>
                                    <td><?php echo $um_usuario["cidade"]; ?></td>
                                    



                                    <td>
                                        <a href="ver-usuario.php?id=<?php echo $um_usuario["id"]; ?>" class="btn btn-light btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>

                                        </a>

                                    </td>
                                    <td>
                                        <a href="editar-usuario.php?id=<?php echo $um_usuario["id"]; ?>" class="btn btn-light btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="excluir-usuario.php?id=<?php echo $um_usuario["id"]; ?>" class="btn btn-light btn-outline-danger">
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

                    </div>
                    <div class="col-12">
                            <a href="painel.php" class="btn btn-light btn-outline-danger">Voltar</a>
                        </div>

                </div>
            </div>
        </div>
    </main>


  