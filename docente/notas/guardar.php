<?php
	include("../../conexion.php");
	
	mysql_query("INSERT INTO lucascaballero.`notas` (`documento`,`materia`,`nota`,`periodo`)
	VALUES ('".$_POST['documento']."','".$_POST['materia']."','".$_POST['nota']."','".$_POST['periodo']."')") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro guardado con exito")</script>';
?>