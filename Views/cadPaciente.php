<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 12/11/2018
 * Time: 15:07
 */
?>
<section class="paciente" id="paciente">
    <h2>Adicionar Paciênte</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_paciente" value="">

            <p>
                <label for="nome">Nome:</label><br/>
                <input type="text" name="nome" value="" placeholder="nome do paciente..." class="btn">
            </p>
            <p>
                <label for="dt_nasc">Data de Nascimento:</label><br/>
                <input type="date" name="dt_nasc" value="" placeholder="" class="btn">
            </p>
            <p>
                <label for="nacion">Nacionalidade:</label><br/>
                <input type="text" name="nacion" value="" placeholder="nacionalidade do paciente..." class="btn">
            </p>
            <p>
                <label for="est_civil">Estado civil:</label><br/>
                <input type="text" name="est_civil" value="" placeholder="estado civil do paciente..." class="btn">
            </p>
            <p>
                <label for="cpf">CPF:</label><br/>
                <input type="number" name="cpf" value="" placeholder="cpf do paciente..." class="btn">
            </p>
            <p>
                <label for="ci">Identidade:</label><br/>
                <input type="text" name="ci" value="" placeholder="carteira de identidade do paciente..." class="btn">
            </p>
            <p>
                <label for="whats">WhatsApp:</label><br/>
                <input type="number" name="whats" value="" placeholder="WhatsApp do paciente..." class="btn">
            </p>
            <p>
                <label for="id_conv">Convênio:</label><br />
                <select class="btn" name="id_conv">
                    <option value="">selecione</option>
                    <?php foreach ($convenios as $convenio): ;?>
                        <option value="<?php echo $convenio->id_conv ;?>"><?php echo $convenio->empresa ;?></option>

                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <input type="submit" name="enviar" value="Salvar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>
