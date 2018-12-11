<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 05/12/2018
 * Time: 20:14
 */
?>

<section class="convenio" >
    {{makeActive('convenios')}}
    <form class="" action="index.html" method="post">
        <h3>Informe o nome do Convenio</h3>
        <input type="text" name="busca" value="" class="btn">
        <input class="sub btn btn-laranja" type="submit" name="buscar" value="Buscar convenio">
    </form>
    <div class="dados">
        <table>
            <tr>
                <th>Empresa</th>
                <th>Contato</th>
                <th>Situação</th>
                <th>Açãoes</th>
            </tr>
            <?php foreach ($convenios as $convenio): ?>
                <tr>
                    <td><?php echo $convenio->empresa; ?></td>
                    <td><?php echo $convenio->contato; ?></td>
                    <td><?php if ($convenio->ativo == 1){
                        echo "ativo";
                        }else{
                        echo "inativo";
                        } ; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL."paciente/exibirPaciente/?id=".$convenio->id_conv; ?>"> <button type="button" name="ver" class="btn-sm btn-verde">Ver</button> </a>
                        <a href="<?php echo BASE_URL."paciente/editPaciente/?id=".$convenio->id_conv; ?>"> <button type="button" name="ver" class="btn-sm btn-azul">Edit</button> </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</section>
