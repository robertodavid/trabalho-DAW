

<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:15
 */
 ?>
 
<section id="paciente">
        {{ ativar('pacientes') }}
        <button class="btn pad-s">Adicionar paciente</button>
        <a href="<?php echo BASE_URL;?>paciente/listar/"><button class="btn pad-s">Listar</button></a><br /><br />
        <input type="text" name="busca" value=""><button class="btn pad-s">Buscarf Paciente</button>
</section>
