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
			<h1 align="center">HORARIOS</h1>
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
			<form method="post" id="horarios">
				<table>
					<tr>
						<th>
							Id:
						</th>
						<td>
							<input type="text" name="id" id="id" readonly="readonly" value="<?php echo $_GET['id']; ?>" />
						</td>
						<th>
							Clase:
						</th>
						<td>
							<input type="text" name="clase" id="clase" required="required" value="<?php echo $_GET['clase']; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							Horario:
						</th>
						<td>
							<input type="text" name="horario" id="horario" required="required" value="<?php echo $_GET['horario']; ?>" />
						</td>
						<th>
							Dias:
						</th>
						<td>
							<input type="text" name="dias" id="dias" required="required" value="<?php echo $_GET['dias']; ?>"/>
						</td>
					</tr>
					<tr>						
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