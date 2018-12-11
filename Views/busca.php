<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 21:46
 */
?>

<section class="paciente" id="paciente">
    {{ makeActive('paciente') }}

    <form class="" action="" method="post">
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
                        <a href="<?php echo BASE_URL."paciente/exibirPaciente/?id=".$paciente->id_paciente; ?>"> <button type="button" name="ver" class="btn-sm btn-verde">Ver</button> </a>
                        <a href="<?php echo BASE_URL."paciente/editPaciente/?id=".$paciente->id_paciente; ?>"> <button type="button" name="ver" class="btn-sm btn-azul">Edit</button> </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</section>
