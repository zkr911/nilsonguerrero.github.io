<?php

require('conexion.php');

$sql = "UPDATE Alumnos SET apellido='Soto' WHERE id = 2";

if( $conn->query($sql) === TRUE ){
    echo "Registro se actualizo exitosamente";
}else{
    echo "Error actualizando el registro: ".$conn->error;
}

$conn->close();
?>