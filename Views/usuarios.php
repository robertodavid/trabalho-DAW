<?php

?>
<section>
    {{ makeActive('consultas') }}
    <h2>Página Usuário</h2>
<!--   --><?php //echo $usuario->id_user; ?>
    <a href="<?php echo BASE_URL;?>usuario/add/"><button class="btn btn-laranja">Adicionar Usuário</button></a>
    <div class="dados">
        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>LVL Acesso</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->nome; ?></td>
                    <td><?php echo $usuario->email; ?></td>
                    <td><?php echo $usuario->lvlacesso; ?></td>
                    <td><?php echo $usuario->ativo; ?></td>
                    <td>
                        <a href="<?php echo "editUsuario/?id=".$usuario->id_user; ?>"><button type="button" name="ver" class="btn-sm btn-verde">Ver</button></a>
                        <a href="<?php echo $usuario->id_user; ?>"><button type="button" name="ver" class="btn-sm btn-azul">Edit</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</section>