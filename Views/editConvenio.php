<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 13/12/2018
 * Time: 22:17
 */
?>
<section class="convenio">
    {{makeActive('convenios')}}
    <h2>Editar Convênio</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_conv" value="<?php echo $convenio['convenio']->id_conv ;?>">

            <p>
                <label for="empresa">Empresa:</label><br/>
                <input type="text" name="empresa" value="<?php echo $convenio['convenio']->empresa; ?>" placeholder="nome da empresa..." class="btn">
            </p>
            <p>
                <label for="contato">Contato:</label><br/>
                <input type="text" name="contato" value="<?php echo $convenio['convenio']->contato;?>" placeholder="Contato da empresa..." class="btn">
            </p>
            <p>
                <label for="ativo">Situação:</label><br />
                <select class="btn" name="ativo">
                        <option value="1" <?php if ($convenio['convenio']->ativo == 1){echo "selected";} ;?>>ativo</option>
                    <option value="0" <?php if ($convenio['convenio']->ativo == 0){echo "selected";} ;?>>inativo</option>

                </select>
            </p>
            <p>
                <input type="submit" name="enviar" value="Salvar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>