<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>Sistema de clínica dentária</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/vue.js"></script>
    </head>
	<body>
    <div id="app">
        <div class="container">
            <header>
                <nav v-bind:class="active" v-on:click.prevent>

                    <!-- When a link in the menu is clicked, we call the makeActive method,
                    defined in the JavaScript Vue instance. It will change the value of "active". -->

                    <a href="#" class="painel" v-on:click="makeActive('painel')">painel</a>
                    <a href="#" class="pacientes" v-on:click="makeActive('pacientes')">pacientes</a>
                    <a href="#" class="medicos" v-on:click="makeActive('medicos')">médicos</a>
                    <a href="#" class="convenios" v-on:click="makeActive('convenios')">convênios</a>
                    <a href="#" class="consultas" v-on:click="makeActive('consultas')">consultas</a>
                </nav>
            </header>


            <?php $this->loadViewInTemplate($viewName, $viewData); ?>



            <footer>
                <br>
                <hr>
                <br>
                Todos os direitos reservados
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>