<?php
	/* Para poder correr el proyecto se deben realizar las asiguientes modificaciones en el código:
	 * - Modificar las variables server, usuario y pwd; según corresponda a la maquina en que se va a ejecutar.
	 *    - Server: Ip de destino en la cual se alojará este proyecto.
	 *    - Usuario: El nombre de usuario que tenga mínimo permisos para SELECT, UPDATE y DELETE, con el que se registra en mysql, por defecto es "root".
	 *    - Pwd: Contraseña para generar el logueo del usuario.
	 * */
	$server = "localhost";
	$usuario = "root";
	$pwd = "Latcom2013";
	mysql_connect($server, $usuario, $pwd);
	session_start();
?>