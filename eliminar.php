<?php

include "conexion.php";

$sql = "DELETE FROM alumno WHERE codigo = 3";

if (mysqli_query($conn, $sql)) {
  echo "Registro eliminado con éxito";
} else {
  echo "Error al eliminar el registro".mysqli_error($conn);
}

mysqli_close($conn);

?> 