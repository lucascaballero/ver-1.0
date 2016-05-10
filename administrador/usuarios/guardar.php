<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`usuarios` (`nombre`,`documento`,`permisos`,`tipo`,`usuario`,`pwd`,`email`,`direccion`)
	VALUES ('".$_POST['nombre']."','".$_POST['documento']."','".$_POST['permisos']."','".$_POST['tipo']."','".$_POST['usuario']."',
	'".md5($_POST['pwd'])."','".$_POST['email']."','".$_POST['direccion']."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>