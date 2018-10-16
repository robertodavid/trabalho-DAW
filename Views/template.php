<html>
	<head>
		<title>Meu site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/vue.js"></script>
	</head>
	<body>
    <div id="app">
		<header>
			<h1>Estrutura basica MVC</h1>
            <h1>{{ msg }}</h1>
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