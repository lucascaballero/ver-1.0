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
		<script>
			$(document).ready(function(){
				$("select, input[type='text']").each(function(){
					$(this).val($(this).attr("data-get"));
				});
			});
		</script>
		<nav>
			<ul>
				<li><a href="../../home.php"><span class="primero"><i class="icon icon-user"></i></span>Home</a></li>
				<li><a href="../notas/index.php"><span class="segundo"><i class="icon icon-user"></i></span>Notas</a></li>
				<li><a href="../tareas/index.php"><span class="tercero"><i class="icon icon-text"></i></span>Tareas</a></li>
				<li><a href="../../index.php"><span class="cuarto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
			</ul>
		</nav>
		<section>
			<br>
			<h1 align="center">NOTAS</h1>
			<br>
			<hr>
			<br>
			<form method="post" id="usuarios">
				<br>
				<center>
					<table style="width: 90%; background: white; border-collapse: collapse;">
						<tr>
							<th style="text-align: center; padding: 5px; border: 1px solid #000;">Materia</th>
							<th style="text-align: center; padding: 5px; border: 1px solid #000;">Profesor</th>
							<th style="text-align: center; padding: 5px; border: 1px solid #000;">Nota</th>
							<th style="text-align: center; padding: 5px; border: 1px solid #000;">Periodo</th>
						</tr>
						<?php
							$query = mysql_query("SELECT materia.nombre, usuarios.nombre, notas.nota, notas.periodo FROM lucascaballero.notas, lucascaballero.materia, lucascaballero.usuarios WHERE
							notas.materia = materia.id AND materia.profesorasignado = usuarios.id AND notas.documento = '".$_SESSION['id']."'") or die (mysql_error());
							if(mysql_num_rows($query) > 0){
								echo '<tr>';
								while($row = mysql_fetch_array($query)){
									echo '<td style="text-align: center; padding: 5px; border: 1px solid #000;">'.$row['0'].'</td>';
									echo '<td style="text-align: center; padding: 5px; border: 1px solid #000;">'.$row['1'].'</td>';
									echo '<td style="text-align: center; padding: 5px; border: 1px solid #000;">'.$row['2'].'</td>';
									echo '<td style="text-align: center; padding: 5px; border: 1px solid #000;">'.$row['6'].'</td>';
								}
								echo '</tr>';
							}else{
								echo "<tr><td colspan='100'>No registra horario</td></tr>";
							}
						?>
					</table>
				</center>
			</form>
			<br>
		</section>
		<footer>
			LUCAS CABALLERO
		</footer>
	</body>
</html>