<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 21/10/2018
 * Time: 01:58
 */
?>

<section>
    <h3 class="head">Área Administrativa:</h3>
    <p class="ls_head_para">Informações do sistema</p>
    <br><br>
    <ul class="list-group col-lg-offset-3 col-lg-6 adm-resumo">
        <li class="">
            <span class="" style="color: black"></span>
            Pacientes
            <span style="float: right" class=""><?php echo $pacientes; ?></span>
        </li>
        <li class="list-group-item">
            <span class="glyphicon glyphicon-plus" style="color: red"></span>
            Médicos
            <span style="float: right" class="label label-success text-right"><?php echo $medicos; ?></span>
        </li>
        <li class="list-group-item">
            <span class="glyphicon glyphicon-briefcase" style="color: black"></span>
            Convênios
            <span style="float: right" class="label label-success text-right"><?php echo $convenios; ?></span>
        </li>
        <li class="list-group-item">
            <span class="glyphicon glyphicon-plus-sign" style="color: red"></span>
            Consultas
            <span style="float: right" class="label label-success text-right"><?php echo $consultas; ?></span>
        </li>
    </ul>
</section>
