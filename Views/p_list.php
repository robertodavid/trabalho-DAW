

<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:15
 */

?>
<section class="paciente" id="paciente">
        {{ ativar('pacientes') }}
        <br /><br />
        <input type="text" name="busca" value=""><button class="btn pad-s">Buscarf Paciente</button>
        <br /><br />
        <div class="dados"><br /><br />
            <table class="tabela"border="1" width="100%" >
                <tr>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>WHATSAPP</th>
                    <th>Ação</th>
                </tr>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo $paciente->nome; ?></td>
                        <td><?php echo $paciente->cpf; ?></td>
                        <td><?php echo $paciente->whats; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL."paciente/editPaciente/?id=".$paciente->id_paciente; ?>"><button class="btn pad-xs">Editar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>


</section>
