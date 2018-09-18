<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 17/09/2018
 * Time: 19:09
 */

?>

<div class="news">
    <div class="container">
        <h3 class="head">Área Administrativa:</h3>
        <p class="ls_head_para">Cadastro de usuáro</p>
        <br><br>
        <form method="post" class="text-center col-lg-offset-3 col-lg-6">
            <div class="form-group text-left">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control login-adm" id="nome" name="nome">
            </div>
            <div class="form-group text-left">
                <label for="usuario">Usuário:</label>
                <input type="text" class="form-control login-adm" id="usuario" name="username">
            </div>
            <div class="form-group text-left">
                <label for="pwd">Senha:</label>
                <input type="password" class="form-control login-adm" id="pwd" name="password">
            </div>
            <div class="form-group text-left">
                <label for="pwd">Nível de Acesso:</label>
                <select id="lvlacesso" name="lvlacesso">
                    <option value="0">Básico</option>
                    <option value="1">Administrador</option>

                </select>
            </div>

            <button type="submit" class="btn-lg btn-login-adm">Cadastrar</button>
            <br><br>
            <?php if(!empty($aviso)){
                ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Atenção!</strong> <?php echo $aviso; ?>
                </div>


                <?php
            } ?>
        </form>
    </div>
</div>