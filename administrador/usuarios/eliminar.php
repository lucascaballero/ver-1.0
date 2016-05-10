<?php
	include("../../conexion.php");
	
	mysql_query("DELETE FROM lucascaballero.`usuarios` WHERE `id`='".$_POST['id']."'") or die (mysql_error());
?>