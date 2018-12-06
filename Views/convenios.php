<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 20:15
 */
?>

<section class="convenio" id="convenio">
    <h2>Convenio</h2>
    <a href="<?php BASE_URL ;?>convenio/add/"><button class="btn btn-laranja">Adicionar Convenio</button></a>
    <a href="<?php BASE_URL ;?>convenio/listar/"><button class="btn btn-laranja">Listar</button><br /><br /></a>
    <form class="" action="index.html" method="post">
        <h3>Informe o nome do Convenio</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar convenio">
    </form>

</section>
