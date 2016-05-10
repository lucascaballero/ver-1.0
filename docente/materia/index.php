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
				<li><a href="../notas/index.php"><span class="primero"><i class="icon icon-user"></i></span>Notas</a></li>
				<li><a href="../tareas/index.php"><span class="segundo"><i class="icon icon-text"></i></span>Tareas</a></li>
			</ul>
		</nav>
		<section>
			<br>
			<h1 align="center">NOTAS</h1>
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
			<form method="post" id="notas">
				<table>
					<tr>
						<th>
							Id:
						</th>
						<td>
							<input type="text" name="id" id="id" readonly="readonly" value="<?php echo $_GET['id']; ?>" />
						</td>
						<th>
							Documento:
						</th>
						<td>
							<input type="text" name="documento" id="documento" required="required" value="<?php echo $_GET['documento']; ?>" />
						</td>
					</tr>
					<tr>
						<th>
							Materia:
						</th>
						<td>
							<input type="text" name="materia" id="materia" required="required" value="<?php echo $_GET['materia']; ?>" />
						</td>
						<th>
							Nota:
						</th>
						<td>
							<input type="text" name="nota" id="nota" required="required" value="<?php echo $_GET['nota']; ?>" />
						</td>
					</tr>
									
					<tr>
						<th>
							Periodo:
						</th>
						<td>
							<select name="periodo" id="periodo">
								<option value="">--Seleccione--</option>
								<option value="1er Periodo">1er Periodo</option>
								<option value="2do Periodo">2do Periodo</option>
								<option value="3er Periodo">3er Periodo</option>
								<option value="4to Periodo">4to Periodo</option>
							</select>
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