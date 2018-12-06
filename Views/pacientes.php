

<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:15
 */
 ?>

<section class="paciente" id="paciente">
    {{ ativar('paciente') }}

    <h2>Pacientes</h2>
    <a href="<?php echo BASE_URL;?>paciente/add/"><button class="btn btn-laranja">Adicionar paciente</button></a>
    <a href="<?php echo BASE_URL;?>paciente/listar/"><button class="btn btn-laranja">Listar</button><br /><br /></a>
    <form class="" action="<?php BASE_URL ;?>paciente/get" method="post">
        <h3>Informe o nome do Paciente</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar Paciente">
    </form>

</section>

