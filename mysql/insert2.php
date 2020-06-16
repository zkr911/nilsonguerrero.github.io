<?php

require('conexion.php');

$sentencia = $conn->prepare(
    "INSERT INTO Alumnos (nombre,apellido,email) 
    VALUES (?,?,?)");
$sentencia->bind_param("sss",$nombre,$apellido,$email);

$nombre = "Ricardo";
$apellido = "Marquez";
$email = "ricardo@santotomas.cl";
$sentencia->execute();

$nombre = "Orlando";
$apellido = "Ramirez";
$email = "orlando@santotomas.cl";
$sentencia->execute();

echo "Registros exitosos";

$sentencia->close();
$conn->close();

?>