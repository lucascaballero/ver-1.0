<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`materia` (`nombre`,`profesorasignado`,`horario`,`dias`,`salon`)
	VALUES ('".utf8_encode($_POST['nombre'])."','".utf8_encode($_POST['profesorasignado'])."','".utf8_encode($_POST['horario'])."','".utf8_encode($_POST['dias'])."','".utf8_encode($_POST['salon'])."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>