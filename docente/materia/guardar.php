<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`materia` (`nombre`,`profesorasignado`,`horario`,`dias`,`salon`)
	VALUES ('".$_POST['nombre']."','".$_POST['profesorasignado']."','".$_POST['horario']."','".$_POST['dias']."','".$_POST['salon']."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>