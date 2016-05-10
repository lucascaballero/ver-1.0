<?php
	include("../../conexion.php");
	
	mysql_query("UPDATE lucascaballero.`usuarios` SET `nombre`='".$_POST['nombre']."',
	`documento`='".$_POST['documento']."',`permisos`='".$_POST['permisos']."',`tipo`='".$_POST['tipo']."',`usuario`='".$_POST['usuario']."',
	`pwd`='".md5($_POST['pwd'])."',`email`='".$_POST['email']."',`direccion`='".$_POST['direccion']."' WHERE `id`='".$_POST['id']."'") or die (mysql_error());
	echo'<script>javascript:location.href = "index.php";alert("Registro modificado con exito")</script>';
?>