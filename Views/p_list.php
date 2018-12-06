

<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:15
 */
echo "<pre>";
var_dump($aviso);
echo "</pre>";
?>
<section class="paciente" id="paciente">
        {{ ativar('paciente') }}

    <form class="" action="<?php BASE_URL ;?>paciente/get" method="post">
        <h3>Informe o nome do Paciente</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar Paciente">
    </form>
    <div class="dados">
        <table>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Identidade</th>
                <th>WhatsApp</th>
                <th>Açãoes</th>
            </tr>

            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?php echo $paciente->nome; ?></td>
                    <td><?php echo $paciente->dt_nasc; ?></td>
                    <td><?php echo $paciente->cpf; ?></td>
                    <td><?php echo $paciente->ci; ?></td>
                    <td><?php echo $paciente->whats; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL."paciente/exibir/?id=".$paciente->id_paciente; ?>"> <button type="button" name="ver" class="btn-sm btn-verde">Ver</button> </a>
                        <a href="<?php echo BASE_URL."paciente/editPaciente/?id=".$paciente->id_paciente; ?>"> <button type="button" name="ver" class="btn-sm btn-azul">Edit</button> </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</section>
