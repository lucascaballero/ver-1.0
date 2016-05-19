<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`tareas` (`nombre`,`texto`, materia)	VALUES ('".$_POST['nombre']."','".$_POST['texto']."','".$_POST['materia']."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php"; alert("Registro guardado con exito")</script>';
?>