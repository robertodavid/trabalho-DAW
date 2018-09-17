<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 23:13
 */


?>

<h1>Página Usuário</h1>



<table border="1" width="100%" >
    <tr>
        <th>ID_USER</th>
        <th>NOME</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>LVLACESSO</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id_user']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['username']; ?></td>
            <td><?php echo $usuario['password']; ?></td>
            <td><?php echo $usuario['lvlacesso']; ?></td>
        </tr>
    <?php endforeach; ?>


</table>