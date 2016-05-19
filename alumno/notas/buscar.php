<?php
	include("../../conexion.php");
	
	$query = mysql_query("SELECT * FROM lucascaballero.`notas` WHERE documento = '".$_GET['buscar']."' ORDER BY id DESC LIMIT 1") or die (mysql_error());
	if(mysql_num_rows($query)){
		while($row = mysql_fetch_array($query)){
			foreach ($row as $key => $value) {
				if(!is_numeric($key)){
					if(!isset($get)){
						$get = urlencode($key)."=".urlencode($value);
					}else{
						$get .= "&".urlencode($key)."=".urlencode($value);
					}
				}
			}
		}
		echo "<script>javascript: location.href='index.php?".$get."'; alert('Información encontrada.')</script>";
	}else{
		echo "<script>javascript: location.href='index.php'; alert('Información no encontrada.')</script>";
	}
?>