<?php
include "menu.php";
?>



<main>
    <?php

    $id = $_GET["id"];
    $nome = $cpf  = $datadenacimento = $email = $telefone = $cep = $rua = $numero = $complemento = $referencia = $senha = $Conf_Senha = "";
    include "conexao.php";
    $sql_buscar = "select * from usuario  where id = $id";
    $todos_os_usuario = mysqli_query($conexao, $sql_buscar);
    while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
        $nome = $um_usuario["nome"];
        $cpf = $um_usuario["cpf"];
        $datanacimento = $um_usuario["datanacimento"];
        $email = $um_usuario["email"];
        $telefone = $um_usuario["telefone"];
        $cep = $um_usuario["cep"];
        $rua = $um_usuario["rua"];
        $numero = $um_usuario["numero"];
        $complemento = $um_usuario["complemento"];
        $cidade = $um_usuario["cidade"];
        $senha = $um_usuario["senha"];
        $Conf_Senha = $um_usuario["Conf_Senha"];

    endwhile;
    mysqli_close($conexao);
    ?>

    <div class="container mt-3">
        <div class="col-12">
            <h6>
                Editar do usuario Cód.: <?php echo $id; ?>
            </h6>
        </div>
        <div class="col-12">
            <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <legend>Editar Usuário</legend>

                        <div class="form-group mt-3">
                            <label for="nome">Nome</label>
                            <input name="nome" value="<?php echo $nome; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input name="cpf" value="<?php echo $cpf; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="datanacimento"> Data de Nacimento</label>
                            <input name="datanacimento" value="<?php echo $datanacimento; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="email" class="form-label"> E-mail</label>
                            <input name="email" value="<?php echo $email; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input name="telefone" value="<?php echo $telefone; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="cep" class="form-label"> CEP </label>
                            <input name="cep" value="<?php echo $cep; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="rua" class="form-label"> Rua</label>
                            <input name="rua" value="<?php echo $rua; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="numero" class="form-label"> Número </label>
                            <input name="numero" value="<?php echo $numero; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="complemento" class="form-label">Referencia </label>
                            <input name="complemento" value="<?php echo $referencia; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="cidade" class="form-label"> Cidade </label>
                            <input name="cidade" value="<?php echo $cidade; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="senha" class="form-label"> Senha </label>
                            <input name="senha" value="<?php echo $senha; ?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="Conf_Senha" class="form-label"> Conf_Senha </label>
                            <input name="Conf_Senha" value="<?php echo $Conf_Senha; ?>" class="form-control">
                        </div>


                        <div class="form-group mt-3">

                            <button type="submit" class="btn btn-light btn-outline-primary">Editar meu usuário</button>
                            <a href="listar-usuario.php" class="btn btn-light btn-outline-success">Voltar</a>

                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</main>

<div style="height: 273px;" class="d-block d-md-none"></div>
<div style="height: 153px;" class="d-none d-md-block d-lg-none"></div>
<div style="height: 129px;" class="d-none d-lg-block"></div>