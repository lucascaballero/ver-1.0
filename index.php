<?php
	include("conexion.php");
?>
<!DOCTYPE html/>
<html>
	<head>
		<title>Lucas Caballero</title>
		<link rel="stylesheet" media="all" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<section>
			<form method="post" action="login.php">
			<table class="login">
				<tr>
					<td align="right" style="width: 30%">USUARIO:</td>
					<td style="width: 60%"><input type="text" name="user" id="user" required="required"></td>
					<td style="width: 10%"><img src="img/user.png" class="login-img"></td>
				</tr>
				<tr>
					<td align="right" style="width: 30%">CONTRASEÑA:</td>
					<td style="width: 60%"><input type="password" name="pwd" id="pwd" required="required"></td>
					<td style="width: 10%"><img src="img/llave.png" class="login-img"></td>
				</tr>
				<tr align="right">
					<td></td>
					<td><input type="submit" value="Ingresar"></td>
					<td></td>
				</tr>
			</table>
			</form>
		</section>
	</body>
</html>