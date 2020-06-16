<?php

require("conexion.php");

$sql = "DELETE FROM Alumnos WHERE id=3";

if( $conn->query($sql) === TRUE ){
    echo "Registro eliminado correctamente";
}else{
    echo "Error eliminando registro :".$conn->error;
}

$conn->close();

?>