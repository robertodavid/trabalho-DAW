<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 06/12/2018
 * Time: 15:16
 */

echo "<pre>";
var_dump($paciente);
echo "</pre>";
?>

<section class="paciente" id="paciente">
    {{ ativar('paciente') }}

    <h2>Telefones e Endereços</h2>
    <a href="<?php echo BASE_URL."paciente/exibirDados/?id=".$paciente[0]->id_paciente; ?>"><button class="btn btn-laranja">Ver Dados</button></a>
    <a href="<?php echo BASE_URL;?>paciente/listar/"><button class="btn btn-laranja">Adicionar Telefone</button><br /><br /></a>
    <a href="<?php echo BASE_URL;?>paciente/listar/"><button class="btn btn-laranja">Adicionar Endereço</button><br /><br /></a>


</section>
