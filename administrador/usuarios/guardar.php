<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`usuarios` (`nombre`,`documento`,`permisos`,`tipo`,`usuario`,`pwd`,`email`,`direccion`)
	VALUES ('".utf8_encode($_POST['nombre'])."','".utf8_encode($_POST['documento'])."','".utf8_encode($_POST['permisos'])."','".utf8_encode($_POST['tipo'])."','".utf8_encode($_POST['usuario'])."',
	'".md5($_POST['pwd'])."','".utf8_encode($_POST['email'])."','".utf8_encode($_POST['direccion'])."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>