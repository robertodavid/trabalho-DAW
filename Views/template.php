<html>
	<head>
		<title>Meu site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/vue.js"></script>
	</head>
	<body>
    <div id="app">
		<header>
            <nav v-bind:class="active" v-on:click.prevent>
                <a href="#" class="home" v-on:click="makeActive('home')">Home</a>
                <a href="#" class="projects" v-on:click="makeActive('projects')">Projects</a>
                <a href="#" class="services" v-on:click="makeActive('services')">Services</a>
                <a href="#" class="contact" v-on:click="makeActive('contact')">Contact</a>
            </nav>
                <p>You chose <b>{{ active }}</b></p>
			<h1>Topo do site</h1>
            <h2>{{ msg }}</h2>
		</header>
		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
            <br>
            <hr>
            <br>
			Todos os direitos reservados
		</footer>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </div>
    </body>
</html>