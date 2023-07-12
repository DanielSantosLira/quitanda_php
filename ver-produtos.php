<?php 
include "menu.php";
?>
  
    <?php


    $id = $_GET['id'];
    $titulo = $categoria = $foto = $video = $estoque = $valor = "";
    include "conexao.php";
    $sql_buscar = "select * from produtos  where id = $id";
    $todos_os_produtos = mysqli_query($conexao, $sql_buscar);

    while ($um_produtos = mysqli_fetch_assoc($todos_os_produtos)) :
        $titulo = $um_produtos["titulo"];
        $categoria = $um_produtos["categoria"];
        $video = $um_produtos["video"];
        $foto = $um_produtos["foto"];
        $estoque = $um_produtos["estoque"];
        $valor = $um_produtos["valor"];
    endwhile;
    mysqli_close($conexao);
    ?>
    
    <div class="container mt-3">
        <div class="col-12">
            <h1 class="text-secondary">
                Detalhe do Produto Cód.: <?php echo $id; ?>
            </h1>
        </div>
        <div class="col-12 text-dark">
            <h3 class="text-secondary">Titulo: <?php echo $titulo; ?> </h3>
            <p><img src="<?php echo $foto; ?>" alt="" width="300"></p>
            <p class="text-primary">Categoria: <small class="text-secondary"><?php echo $categoria; ?></small> </p>
            <p class="text-danger">Estoque:<small class="text-secondary"> <?php echo $estoque; ?></small> </p>
            </p>
            <p class="text-muted">Valor:<small class="text-danger"> <?php echo $valor; ?></small> </p>
            <a href="<?php echo $video; ?>" class="btn btn-light btn-outline-primary">Adicionar ao Carinnho</a>
            <a href="listar-produtos.php" class="btn btn-light btn-outline-success">Voltar</a>
        </div>

    </div>

    <div style="height: 273px;" class="d-block d-md-none"></div>
    <div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
    <div style="height: 129px;" class="d-none d-lg-block"></div>


  