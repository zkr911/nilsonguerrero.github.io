<?php

require('conexion.php');

$select = "SELECT * FROM Alumnos";

$resultado = mysqli_query($conn,$select);

if( mysqli_num_rows($resultado) > 0 ){
    while( $row = mysqli_fetch_assoc($resultado) ){
        echo "<br>id: ".$row["id"]." - Nombre : ".$row["nombre"].
        " ".$row["apellido"]." - Email: ".$row["email"].
        " - Fecha registro: ".$row["fecha_reg"];
    }
}else{
    echo "No existen registros en la tabla alumnos";
}

$conn->close();

?>