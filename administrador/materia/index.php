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
				<li><a href="../../home.php"><span class="primero"><i class="icon icon-user"></i></span>Home</a></li>
				<li><a href="../usuarios/index.php"><span class="segundo"><i class="icon icon-user"></i></span>Usuarios</a></li>
				<li><a href="../materia/index.php"><span class="tercero"><i class="icon icon-book"></i></span>Materias</a></li>
				<li><a href="../../index.php"><span class="cuarto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
			</ul>
		</nav>
		<section>
			<br>
			<h1 align="center">MATERIA</h1>
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
							Profesor Asignado:
						</th>
						<td>
							<select name="profesorasignado" id="profesorasignado" required="required" value="<?php echo $_GET['profesorasignado']; ?>">
								<option value="">--Seleccione--</option>
								<?php
									$query = mysql_query("SELECT id, nombre FROM lucascaballero.usuarios WHERE tipo = 'Docente' ORDER BY nombre ASC") or die (mysql_error());
									while($row = mysql_fetch_array($query)){
										echo "<option value='".$row['0']."'>".$row['1']."</option>";
									}
								?>
							</select>
						</td>
						<th>
							Horario:
						</th>
						<td>
							<input type="text" name="horario" id="horario" required="required" value="<?php echo $_GET['horario']; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							Dias:
						</th>
						<td>
							<input type="text" name="dias" id="dias" required="required" value="<?php echo $_GET['dias']; ?>"/>
						</td>
						<th>
							Salon:
						</th>
						<td>
							<input type="text" name="salon" id="salon" required="required" value="<?php echo $_GET['salon']; ?>"/>
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