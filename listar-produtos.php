<?php
include "menu.php";
?>

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
                    <thead class="bg-success text-white">
                        <tr>
                            <td>Codigo</td>
                            <td>Título</td>
                            <td>foto</td>
                            <td>Categoria</td>
                            <td>Estoque</td>
                            <td>valor</td>
                            <td>Visualizar</td>
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
                                <td><img src="<?php echo $foto = $um_produtos["foto"]; ?>" alt="" width="50"></td>
                                <td><?php echo $um_produtos["categoria"]; ?></td>
                                <td><?php echo $um_produtos["estoque"]; ?></td>
                                <td><?php echo $um_produtos["valor"]; ?></td>

                                <td>
                                    <a href="ver-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class="btn btn-light btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>

                                    </a>

                                </td>
                                <td>
                                    <a href="editar-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class="btn btn-light btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="excluir-produtos.php?id=<?php echo $um_produtos["id"]; ?>" class="btn btn-light btn-outline-danger">
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
            <div class="col-12">
                <a href="painel.php" class="btn btn-light btn-outline-success">Voltar</a>
            </div>

        </div>

    </div>
</main>

<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>