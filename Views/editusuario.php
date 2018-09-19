<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 17/09/2018
 * Time: 19:09
 */
//echo "<pre>";
//var_dump($usuario);
//echo "</pre>";
foreach ($usuario as $u):
?>

<div class="news">
    <div class="container">
        <h3 class="head">Área Administrativa:</h3>
        <p class="ls_head_para">Edição de usuáro</p>
        <br><br>
        <form method="post" class="text-center col-lg-offset-3 col-lg-6">
            <div class="form-group text-left">
                <label for="nome">Nome:</label><br>
                <input type="hidden" class="form-control login-adm" id="id_user" name="id_user" value="<?php echo $u["id_user"] ;?>">
                <input type="text" class="form-control login-adm" id="nome" name="nome" value="<?php echo $u["nome"] ;?>">
            </div>
            <div class="form-group text-left">
                <label for="usuario">Usuário:</label><br>
                <input type="text" class="form-control login-adm" id="usuario" name="username" value="<?php echo $u["username"] ;?>">
            </div>
            <div class="form-group text-left">
                <label for="pwd">Senha:</label><br>
                <input type="password" class="form-control login-adm" id="pwd" name="password">
            </div>
            <div class="form-group text-left"><br>
                <label for="pwd">Nível de Acesso:</label>
                <select id="lvlacesso" name="lvlacesso">
                    <option value="0">Básico</option>
                    <option value="1">Administrador</option>

                </select>
            </div>
            <br><br>
            <button type="submit" class="btn-lg btn-login-adm">Salvar</button>
            <br><br>
            <?php endforeach; ?>
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