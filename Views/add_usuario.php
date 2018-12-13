<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 13/12/2018
 * Time: 14:41
 */
?>

<section class="paciente" id="paciente">
    {{ makeActive('consultas') }}
    <h2>Adicionar Usuário</h2>

    <form class="" action="" method="post">
        <fieldset>
            <input type="hidden" name="id_usuario" value="">

            <p>
                <label for="nome">Nome:</label><br/>
                <input type="text" name="nome" value="" placeholder="nome" class="btn">
            </p>
            <p>
                <label for="email">E-mail:</label><br/>
                <input type="email" name="email" value="" placeholder="E-mail(será usado no login)" class="btn">
            </p>
            <p>
                <label for="password">Senha:</label><br/>
                <input type="password" name="password" value="" placeholder="Senha" class="btn">
            </p>

            <p>
                <input type="submit" name="enviar" value="Salvar" class="btn btn-laranja">
            </p>
        </fieldset>
    </form>
</section>
