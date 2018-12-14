<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 15:09
 */

//echo "<pre>";
//var_dump($medicos);
//echo "</pre>";
?>

<section class="dentista" id="dentista">
    {{ makeActive("medicos") }}
    <form class="" action="index.html" method="post">
        <h3>Informe o nome do Dentista</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar Dentista">
    </form>

    <?php if(!empty($medicos)): ?>
    <div class="dados">
        <table>
            <tr>
                <th>Nome</th>
                <th>CRO</th>
                <th>Nascimento</th>
                <th>WhatsApp</th>
                <th>Açãoes</th>
            </tr>
            <?php foreach ($medicos as $medico): ?>
                <tr>
                    <td><?php echo $medico->nome; ?></td>
                    <td><?php echo $medico->dt_nasc; ?></td>
                    <td><?php echo $medico->cro; ?></td>
                    <td><?php echo $medico->whats; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL."medico/exibir/?id=".$medico->id_medic; ?>"> <button type="button" name="ver" class="btn-sm btn-verde">Ver</button> </a>
                        <a href="<?php echo BASE_URL."medico/edit/?id=".$medico->id_medic; ?>"> <button type="button" name="ver" class="btn-sm btn-azul">Edit</button> </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
    <?php else: ?>
    <div>
        <h3>Nenhum Dentista encontrado!</h3>

    </div>
    <?php endif; ?>
</section>
