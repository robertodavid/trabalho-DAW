<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 20:23
 */
?>
<section class="paciente" id="paciente">
    {{ makeActive('convenios') }}
    <h2>Adicionar Convênio</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_conv" value="">

            <p>
                <label for="empresa">Empresa:</label><br/>
                <input type="text" name="empresa" value="" placeholder="nome" class="btn">
            </p>
            <p>
                <label for="contato">Contato:</label><br/>
                <input type="text" name="contato" value="" placeholder="Contato" class="btn">
            </p>
            <p>
                <input type="submit" name="enviar" value="Salvar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>
