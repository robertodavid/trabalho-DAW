<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Dental Labs</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />


    <meta name="description" content="Sistema simples para gerenciamento de clinicas dentárias" />
    <meta name="keywords" content="Clínica dentária, Gerenciamento, Sistema" />
    <meta name="author" content="Roberto Pereira David">

    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content ="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <script src="<?php echo BASE_URL?>assets/js/vue.js"></script>

</head>
<body>
    <div id="app">
        <header class="cabecalho">
            <a href="<?php echo BASE_URL?>"><h1 class="logo">Dental Labs</h1></a>
            <button class="btn-menu" v-on:click="menu"><i class="fas fa-bars"></i></button>
            <nav class="" v-bind:class="active" id="nav">
                <ul>
                    <li><a href="<?php echo BASE_URL?>" class="home" v-on:click="makeActive('home')">home</a></li>
                    <li><a href="<?php echo BASE_URL;?>paciente" class="pacientes" v-on:click="makeActive('pacientes')">pacientes</a> </li>
                    <li><a href="<?php echo BASE_URL;?>medico" class="medicos" v-on:click="makeActive('medicos')">médicos</a></li>
                    <li><a href="<?php echo BASE_URL;?>convenio" class="convenios" v-on:click="makeActive('convenios')">convênios</a></li>
                    <li><a href="<?php echo BASE_URL?>" class="consultas" v-on:click="makeActive('consultas')">consultas</a></li>
                    <li><a href="<?php echo BASE_URL?>login/sair/" class="sair" v-on:click="makeActive('sair')">sair</a></li>
                </ul>
            </nav>
        </header>

        <main>

            <?php $this->loadViewInTemplate($viewName, $viewData);?>

        </main>

        <footer>
            <div class="ft">
                <div class="conteudo-ft">
                    <div class="ft-left">
                        Copyright © 2018 |  Dental Labs | All Rights Reserved
                    </div>
                    <div class="ft-right">
                        Terms of Service | Privacy Policy
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/script.js"></script>
</body>
</html>