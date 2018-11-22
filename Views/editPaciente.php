<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 12/11/2018
 * Time: 16:19
 */

?>
<section class="paciente" id="paciente">
    <h2>Editar Paciente</h2>

    <form class="" action="index.html" method="post">
        <fieldset>
            <input type="hidden" name="id_paciente" value="<?php echo $paciente['paciente']->id_paciente; ?>">

            <p>
                <label for="nome">Nome:</label><br/>
                <input type="text" name="nome" value="<?php echo $paciente['paciente']->nome; ?>" placeholder="nome do paciente..." class="btn">
            </p>
            <p>
                <label for="dt_nasc">Data de Nascimento:</label><br/>
                <input type="date" name="dt_nasc" value="<?php echo $paciente['paciente']->dt_nasc;?>" placeholder="" class="btn">
            </p>
            <p>
                <label for="nacion">Nacionalidade:</label><br/>
                <input type="text" name="nacion" value="<?php echo $paciente['paciente']->nacion;?>" placeholder="nacionalidade do paciente..." class="btn">
            </p>
            <p>
                <label for="est_civil">Estado civil:</label><br/>
                <input type="text" name="est_civil" value="<?php echo $paciente['paciente']->est_civil;?>" placeholder="estado civil do paciente..." class="btn">
            </p>
            <p>
                <label for="cpf">CPF:</label><br/>
                <input type="number" name="cpf" value="<?php echo $paciente['paciente']->cpf;?>" placeholder="cpf do paciente..." class="btn">
            </p>
            <p>
                <label for="ci">Identidade:</label><br/>
                <input type="text" name="ci" value="<?php echo $paciente['paciente']->ci;?>" placeholder="carteira de identidade do paciente..." class="btn">
            </p>
            <p>
                <label for="whats">WhatsApp:</label><br/>
                <input type="number" name="whats" value="<?php echo $paciente['paciente']->whats;?>" placeholder="WhatsApp do paciente..." class="btn">
            </p>
            <p>
                <label for="id_conv">Convênio:</label><br />
                <select class="btn" name="id_conv">
                    <option value="">alterar</option>
                    <option value="1" >particular</option>
                    <option value="2">Unimed</option>
                    <option value="3">Dente Torto</option>
                    <option value="4">Dente Bambo</option>
                </select>
            </p>
            <p>
                <input type="submit" name="enviar" value="Adicionar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>
