<html>
	<head>
		<title>Meu site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<header>
			<h1>Estrutura basica MVC</h1>
		</header>
		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
			Todos os direitos reservados
		</footer>
	</body>
</html>