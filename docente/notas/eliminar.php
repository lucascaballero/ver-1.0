<?php
	include("../../conexion.php");
	
	mysql_query("DELETE FROM lucascaballero.`notas` WHERE `id`='".$_POST['id']."'") or die (mysql_error());
?>