<?php

$conexion = mysqli_connect("localhost", "root", "", "proyectof");

// Comprobar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "¡Conexión exitosa!";

// No olvides cerrar la conexión cuando ya no sea necesaria
mysqli_close($conexion);
?>
