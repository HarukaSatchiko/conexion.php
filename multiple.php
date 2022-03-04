<?php
	$server = "localhost";
	$user = "root";
	$pass = "";

	// Crea conexión 
	$conn = mysqli_connect($server, $user, $pass);

	// Verificar conexión
	if (!$conn) { 
		die ("Conexión falló: ".mysqli_connect_error());
	}

	echo "Conexión OK <br>";

	$db = "baseejem";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if(!$conn){
		die("Conexión a base de datos falló".mysqli_connect_error());
	}

	$consulta = " INSERT INTO alumno (nombre, apellido) VALUES ('July','Penagos');";
	$consulta .= " INSERT INTO alumno (nombre, apellido) VALUES ('Ana','Penagos');";
	$consulta .= " INSERT INTO alumno (nombre, apellido) VALUES ('Damian','Vargas');";

	if(mysqli_multi_query($conn, $consulta)){
		echo "Se registraron multiples alumnos";
	}else{
		echo "Error: ".$consulta."<br>".mysqli_error($conn);

	}
?>