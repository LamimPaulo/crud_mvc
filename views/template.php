<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Crud MVC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"> </script>
	</head>
	<body>

		<header>
			<h1>Sistema contatos - *Crud*</h1>
		</header>
		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
			footer ~~~~~~ 
		</footer>
	</body>
</html>
