<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 14:42
 */

?>
<section class="dentista" id="dentista">
    {{ makeActive("medicos") }}
    <h2>Dentistas</h2>
    <a href="<?php BASE_URL ;?>"><button class="btn btn-laranja">Adicionar Dentista</button></a>
    <a href="#"><button class="btn btn-laranja">Listar</button><br /><br /></a>
    <form class="" action="index.html" method="post">
        <h3>Informe o nome do Dentista</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar Dentista">
    </form>

</section>
