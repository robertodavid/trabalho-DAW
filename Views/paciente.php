<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 12/11/2018
 * Time: 16:25
 */
?>

<section class="paciente">
    {{ makeActive("pacientes") }}
    <h2>Paciente</h2>
    <a href="<?php echo BASE_URL."paciente/dados/?id=".$paciente['paciente']->id_paciente; ?>"><button class="btn btn-laranja">Telefones e Endereços</button><br /><br /></a>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_paciente" value="<?php echo $paciente['paciente']->id_paciente; ?>">

            <p>
                <label for="nome">Nome:</label><br/>
                <input disabled type="text" name="nome" value="<?php echo $paciente['paciente']->nome; ?>" placeholder="nome do paciente..." class="btn">
            </p>
            <p>
                <label for="dt_nasc">Data de Nascimento:</label><br/>
                <input disabled type="date" name="dt_nasc" value="<?php echo $paciente['paciente']->dt_nasc;?>" placeholder="" class="btn">
            </p>
            <p>
                <label for="nacion">Nacionalidade:</label><br/>
                <input disabled type="text" name="nacion" value="<?php echo $paciente['paciente']->nacion;?>" placeholder="nacionalidade do paciente..." class="btn">
            </p>
            <p>
                <label for="est_civil">Estado civil:</label><br/>
                <input disabled type="text" name="est_civil" value="<?php echo $paciente['paciente']->est_civil;?>" placeholder="estado civil do paciente..." class="btn">
            </p>
            <p>
                <label for="cpf">CPF:</label><br/>
                <input disabled type="number" name="cpf" value="<?php echo $paciente['paciente']->cpf;?>" placeholder="cpf do paciente..." class="btn">
            </p>
            <p>
                <label for="ci">Identidade:</label><br/>
                <input disabled type="text" name="ci" value="<?php echo $paciente['paciente']->ci;?>" placeholder="carteira de identidade do paciente..." class="btn">
            </p>
            <p>
                <label for="whats">WhatsApp:</label><br/>
                <input disabled type="number" name="whats" value="<?php echo $paciente['paciente']->whats;?>" placeholder="WhatsApp do paciente..." class="btn">
            </p>
            <p>
                <label for="id_conv">Convênio:</label><br />
                <select disabled class="btn" name="id_conv">
                    <?php foreach ($convenios as $convenio): ;?>
                        <option value="<?php echo $convenio->id_conv ;?>" <?php if ($convenio->id_conv == $paciente['paciente']->id_conv){echo "selected";} ;?>><?php echo $convenio->empresa ;?></option>

                    <?php endforeach; ?>
                </select>

            </p>
        </fieldset>
    </form>
</section>

