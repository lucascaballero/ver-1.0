<?php
	include("conexion.php");

	$query = mysql_query("SELECT id, nombre, permisos, tipo, documento FROM lucascaballero.usuarios WHERE usuario = 
	'".$_POST['user']."' AND pwd = '".md5($_POST['pwd'])."'") or die (mysql_error());

	if(mysql_num_rows($query) > 0){
		while($row = mysql_fetch_array($query)){
			$_SESSION['id'] = $row['id'];
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['permisos'] = $row['permisos'];
			$_SESSION['tipo'] = $row['tipo'];
			$_SESSION['documento'] = $row['documento'];
		}
		echo "<script>javascript: location.href=\"home.php\"; alert(\"Datos correctos.\");</script>";
	}else{
		echo "<script>javascript: history.go(-1); alert(\"Usuario o contraseña incorrectos.\");</script>";
	}
	
?>