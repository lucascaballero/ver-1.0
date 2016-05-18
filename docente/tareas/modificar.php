<?php
	include("../../conexion.php");
	
	mysql_query("UPDATE lucascaballero.`tareas` SET `nombre`='".$_POST['nombre']."',`texto`='".$_POST['texto']."'
	 WHERE `id`='".$_POST['id']."'") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro modificado con exito")</script>';
?>