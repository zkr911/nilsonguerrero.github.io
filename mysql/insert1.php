<?php

require('conexion.php');

$sql = "INSERT INTO Alumnos(nombre,apellido,email) 
VALUES ('Juan','Perez','juan@santotomas.cl')";

if( $conn->query($sql) === TRUE ){
    echo "Nuevo registro creado exitosamente";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();

?>