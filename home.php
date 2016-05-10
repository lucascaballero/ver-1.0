<?php
	include("conexion.php");
?>
<!DOCTYPE html/>
<html>
	<head>
		<title>Lucas Caballero</title>
		<link rel="stylesheet" media="all" type="text/css" href="css/style_administrador.css"/>
		<link href="fonts/style.css" type="text/css" media="all" rel="stylesheet"/>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
		<meta charset="UTF-8" media="all" />
	</head>
	<body>
		<nav>
			<?php include("".strtolower($_SESSION['tipo'])."/nav.php"); ?>
		</nav>
		<section>
			<br>
			<h1 align="center">NOSOTROS</h1>
			<br>
		</section>
		<footer>
			
		</footer>
	</body>
</html>