<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 06/12/2018
 * Time: 15:43
 */

//echo "<pre>";
//var_dump($paciente);
//echo "</pre>";
//echo "<pre>";
//var_dump($telefones);
//echo "</pre>";
//echo "<pre>";
//var_dump($enderecos);
//echo "</pre>";
?>
<section class="paciente" id="paciente">
    {{ makeActive("pacientes") }}
    <h2>Paciente</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_paciente" value="<?php echo $paciente[0]->id_paciente; ?>">

            <p>
                <label for="nome">Nome:</label><br/>
                <input disabled type="text" name="nome" value="<?php echo $paciente[0]->nome; ?>" placeholder="nome do paciente..." class="btn">
            </p>

            <h2>Telefone:</h2>
            <a href="<?php echo BASE_URL."telefone/add/?id=".$paciente[0]->id_paciente; ?>"> <button type="button" name="ver" class="btn btn-laranja">Adicionar Telefone</button> </a>

            <?php
                    if ($telefones['msg'] != ""){
                        ?>
                        <p>
                            <label for="dt_nasc">Telefone:</label><br/>
                            <input disabled type="text" name="telefone" value="<?php echo $telefones->msg;?>" placeholder="" class="btn">
                        </p>
                        <?php
                    }else{
                        foreach ($telefones['telefones'] as $tel): ?>

                            <p>
                                <label for="dt_nasc">Telefone:</label><br/>
                                <input disabled type="text" name="telefone" value="<?php echo $tel->telefone;?>" placeholder="" class="btn">
                            </p>
                            <p>
                                <textarea disabled> <?php echo $tel->obs;?> </textarea>
                            </p>
                <?php endforeach;
                    }
                ;?>


            <h2>Endereço:</h2>
            <a href="<?php echo BASE_URL."endereco/add/?id=".$paciente[0]->id_paciente; ?>"> <button type="button" name="ver" class="btn btn-laranja">Adicionar Telefone</button> </a>
            <?php
            if ($enderecos['msg'] != ""){
                ?>
                <p>
                    <label for="dt_nasc">Msg:</label><br/>
                    <input disabled type="text" name="msg" value="<?php echo $enderecos['msg'] ;?>" placeholder="" class="btn">
                </p>
                <?php
            }else{
                foreach ($enderecos['enderecos'] as $end): ?>

                    <p>
                        <label for="dt_nasc">Logradouro:</label><br/>
                        <input disabled type="text" name="logradouro" value="<?php echo $end->logradouro;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Logradouro:</label><br/>
                        <input disabled type="text" name="numero" value="<?php echo $end->numero;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Complemento:</label><br/>
                        <input disabled type="text" name="complemento" value="<?php echo $end->complemento;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Bairro:</label><br/>
                        <input disabled type="text" name="bairro" value="<?php echo $end->bairro;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Cidade:</label><br/>
                        <input disabled type="text" name="cidade" value="<?php echo $end->cidade;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">UF:</label><br/>
                        <input disabled type="text" name="uf" value="<?php echo $end->uf;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Cep:</label><br/>
                        <input disabled type="text" name="cep" value="<?php echo $end->cep;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <label for="dt_nasc">Tipo:</label><br/>
                        <input disabled type="text" name="tipo" value="<?php echo $end->tipo;?>" placeholder="" class="btn">
                    </p>
                    <p>
                        <textarea disabled> <?php echo $tel->obs;?> </textarea>
                    </p>
                <?php endforeach;
            }
            ;?>
            <a href="<?php echo BASE_URL;?>paciente/listar/"> <button type="button" name="ver" class="btn btn-laranja">Voltar</button> </a>

        </fieldset>
    </form>

</section>
