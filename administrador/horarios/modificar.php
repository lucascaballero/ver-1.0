<?php
	include("../../conexion.php");
	
	mysql_query("UPDATE lucascaballero.`horarios` SET `nombre`='".$_POST['nombre']."',
	`profesorasignado`='".$_POST['profesorasignado']."',`horario`='".$_POST['horario']."',`dias`='".$_POST['dias']."',`salon`='".$_POST['salon']."'
	 WHERE `id`='".$_POST['id']."'") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro modificado con exito")</script>';
?>