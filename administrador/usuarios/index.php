<?php
	include("../../conexion.php");
?>
<!DOCTYPE html/>
<html>
	<head>
		<title>Lucas Caballero</title>
		<link rel="stylesheet" media="all" type="text/css" href="../../css/style_administrador.css"/>
		<link href="../../fonts/style.css" type="text/css" media="all" rel="stylesheet"/>
		<script src="../../js/jquery.js"></script>
		<script src="../../js/scriptusuarios.js"></script>
		<meta charset="UTF-8" media="all" />
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="../usuarios/index.php"><span class="primero"><i class="icon icon-user"></i></span>Usuarios</a></li>
				<li><a href="../horarios/index.php"><span class="segundo"><i class="icon icon-text"></i></span>Horarios</a></li>
				<li><a href="../materia/index.php"><span class="tercero"><i class="icon icon-book"></i></span>Materias</a></li>
			</ul>
		</nav>
		<section>
			<br>
			<h1 align="center">USUARIOS</h1>
			<br>
			<hr>
			<br>
			<form method="get" action="buscar.php">
				<table>
					<tr>
						<td>
							Buscar:
						</td>
						<td>
							<input type="text" id="buscar" name="buscar" style="margin-right: 20px;"/>
						</td>
						<td>
							<input type="submit" style="margin-right: 20px;" value="Buscar"/>
						</td>
					</tr>
				</table>
			</form>
			<form method="post" id="usuarios">
				<table>
					<tr>
						<th>
							Id:
						</th>
						<td>
							<input type="text" name="id" id="id" readonly="readonly" value="<?php echo $_GET['id']; ?>" />
						</td>
						<th>
							Nombre:
						</th>
						<td>
							<input type="text" name="nombre" id="nombre" required="required" value="<?php echo $_GET['nombre']; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							Permisos:
						</th>
						<td>
							<select name="permisos" id="permisos" value="<?php echo $_GET['permisos']; ?>">
								<option value="">--Seleccione--</option>
								<option value="1">Administrador</option>
								<option value="0">Usuario</option>
							</select>
						</td>
						<th>
							Tipo:
						</th>
						<td>
							<select name="tipo" id="tipo">
								<option value="">--Seleccione--</option>
								<option value="Administrador">Administrador</option>
								<option value="Docente">Docente</option>
								<option value="Estudiante">Estudiante</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>
							Usuario:
						</th>
						<td>
							<input type="text" name="usuario" id="usuario" required="required" value="<?php echo $_GET['usuario']; ?>"/>
						</td>
						<th>
							Contraseña:
						</th>
						<td>
							<input type="password" name="pwd" id="pwd" required="required"/>
						</td>
					</tr>
					<tr>
						<th>
							Confirmar Contraseña:
						</th>
						<td>
							<input type="password" id="confirmarcontraseña" required="required"/>
						</td>
						<th>
							E-mail:
						</th>
						<td>
							<input type="email" name="email" id="email" required="required" value="<?php echo $_GET['email']; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							Dirección:
						</th>
						<td>
							<input type="text" name="direccion" id="direccion" required="required" value="<?php echo $_GET['direccion']; ?>" />
						</td>
						<th>
							Documento:
						</th>
						<td>
							<input type="text" name="documento" id="documento" required="required" value="<?php echo $_GET['documento']; ?>" />
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<br>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: right;"><input type="submit" id="aceptar" style="margin-right: 20px;" value="Aceptar"/></td>
						<td colspan="2" style="text-align: left;"><input type="submit" id="eliminar" style="margin-left: 20px;" value="Eliminar"/></td>
					</tr>
				</table>
			</form>
			<br>
		</section>
		<footer>
			LUCAS CABALLERO
		</footer>
	</body>
</html>