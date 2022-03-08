<?php

include "conexion.php";

$sql = "UPDATE alumno SET apellido='Casas' WHERE codigo = 2";

if (mysqli_query($conn, $sql)) {
  echo "Registro actualizado correctamente";
} else {
  echo "Error al actualizar registro: " .mysqli_error($conn);
}

mysqli_close($conn);

?>