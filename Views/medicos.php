<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 15:15
 */
?>

<section class="dentista">
    {{ makeActive("medicos") }}
    <h2>Dentistas</h2>
    <a href="<?php BASE_URL ;?>medico/add/"><button class="btn btn-laranja">Adicionar Dentista</button></a>
    <a href=<?php BASE_URL ;?>medico/listar/"><button class="btn btn-laranja">Listar</button><br /><br /></a>
    <form class="" action="<?php BASE_URL ;?>medico/get" method="post">
        <h3>Informe o nome do Dentista</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar Dentista">
    </form>

</section>

