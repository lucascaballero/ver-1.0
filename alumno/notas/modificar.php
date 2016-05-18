<?php
	include("../../conexion.php");
	
	mysql_query("UPDATE lucascaballero.`notas` SET `documento`='".$_POST['documento']."',
	`materia`='".$_POST['materia']."',`nota`='".$_POST['nota']."',`periodo`='".$_POST['periodo']."' WHERE `id`='".$_POST['id']."'") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro modificado con exito")</script>';
?>