<?php

echo "<pre>";
var_dump($usuarios);
echo "</pre>";


echo BASE_URL;
?>

<h1>Página Usuário</h1>



<table border="1" width="100%" >
    <tr>
        <th>ID_USER</th>
        <th>NOME</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>LVLACESSO</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->id_user; ?></td>
            <td><?php echo $usuario->nome; ?></td>
            <td><?php echo $usuario->username; ?></td>
            <td><?php echo $usuario->password; ?></td>
            <td><?php echo $usuario->lvlacesso; ?></td>
            <td>
                <a href="<?php echo $usuario->id_user; ?>">[EDITAR]</a>
                <a href="<?php echo $usuario->id_user; ?>">[APAGAR]</a>

            </td>
        </tr>
    <?php endforeach; ?>


</table>