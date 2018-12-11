<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 22:05
 */
?>

<section id="home" class="pg-home">
    {{ makeActive("home") }}
    {{msg}}

    <h2>Informações do sistema</h2>
    <div class="dados">
        <ul class="list-system">
            <li class="list-group-item">
                <i class="fas fa-user"></i></i>
                <span class="padding-m">Pacientes</span>
                <span class="result"><?php echo $pacientes->nPaci ;?></span>
            </li>
            <li class="list-group-item">
                <i class="fas fa-plus-square"></i>
                <span class="padding-m">Dentistas</span>
                <span class="result"><?php echo $medicos->nMed ;?></span>
            </li>
            <li class="list-group-item">
                <i class="fas fa-briefcase-medical"></i>
                <span class="padding-m">Convênios</span>
                <span class="result"><?php echo $convenios->nConv ;?></span>
            </li>
            <li class="list-group-item">
                <i class="far fa-calendar-plus"></i>
                <samp class="padding-m">Consultas</samp>
                <span class="result">38</span>
            </li>
        </ul>
    </div>
</section>
