<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 15:58
 */
?>
<section class="paciente" id="paciente">
    {{ makeActive('medicos') }}
    <h2>Adicionar Dentista</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_medic" value="">

            <p>
                <label for="nome">Nome:</label><br/>
                <input type="text" name="nome" value="" placeholder="nome" class="btn">
            </p>
            <p>
                <label for="dt_nasc">Nascimento:</label><br/>
                <input type="date" name="dt_nasc" value="" placeholder="" class="btn">
            </p>
            <p>
                <label for="cro">CRO:</label><br/>
                <input type="text" name="cro" value="" placeholder="cro" class="btn">
            </p>
            <p>
                <label for="Whats">CRO:</label><br/>
                <input type="number" name="whats" value="" placeholder="WhatsApp" class="btn">
            </p>

            <p>
                <input type="submit" name="enviar" value="Salvar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>