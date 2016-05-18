<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`notas` (`documento`,`materia`,`nota`,`periodo`)
	VALUES ('".utf8_encode($_POST['documento'])."','".utf8_encode($_POST['materia'])."','".utf8_encode($_POST['nota'])."','".utf8_encode($_POST['periodo'])."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>