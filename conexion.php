<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "baseejem";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if(!$conn)
		die("Conexión a base de datos falló".mysqli_connect_error());
	
?>