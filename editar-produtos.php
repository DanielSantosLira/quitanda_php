<?php
include "menu.php";
?>

<main>
    <?php
    $id = $_GET['id'];
    $titulo = $categoria = $video = $foto = $foto1 = $foto2 =  $valor =  $estoque = "";
    include "conexao.php";
    $sql_buscar = "select * from produtos where id = $id";
    $todos_os_produtos = mysqli_query($conexao, $sql_buscar);
    while ($um_produtos = mysqli_fetch_assoc($todos_os_produtos)) :
        $titulo = $um_produtos["titulo"];
        $categoria = $um_produtos["categoria"];
        $video = $um_produtos["video"];
        $foto = $um_produtos["foto"];
        $foto1 = $um_produtos["foto1"];
        $foto2 = $um_produtos["foto2"];
        $valor = $um_produtos["valor"];
        $estoque = $um_produtos["estoque"];

    endwhile;
    mysqli_close($conexao);
    ?>

    <div class="container mt-3">
        <div class="col-12">
            <h6>
                Editar do produtos Cód.: <?php echo $id; ?>
            </h6>
        </div>
        <div class="col-12">
            <form action="salvar-produtos-editado.php?id=<?php echo $id; ?>" method="post">
                <div class="form-group mt-3">
                    <label for="nome">Titulo</label><input name="titulo" value="<?php echo $titulo; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">

                    <label for="categoria">Categoria</label> :<input name="categoria" value="<?php echo $categoria; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="video">Video</label><input name="video" value="<?php echo $video; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    Foto :<input name="foto" value="<?php echo $foto; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    Foto1 :<input name="foto1" value="<?php echo $foto1; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    Foto2 :<input name="foto2" value="<?php echo $foto2; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    valor :<input name="valor" value="<?php echo $valor; ?>" class="form-control">
                </div>
                <div class="form-group mt-3">
                    Estoque :<input name="estoque" value="<?php echo $estoque; ?>" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-light btn-outline-primary"">Salvar</button>
                    <a href="listar-produtos.php" class="btn btn-light btn-outline-success">Voltar</a>
                </div>
            </form>

        </div>

    </div>
</main>

<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>