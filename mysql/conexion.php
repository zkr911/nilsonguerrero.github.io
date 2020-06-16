<?php

$servidor = "localhost:3310";
$usuario = "root";
$clave = "";
$basedatos = "mydb";

$conn = new mysqli($servidor,$usuario,$clave,$basedatos);

if( $conn->connect_error ){
    die("Conexión falló:".$conn->connect_error);
}
//echo "Conectado correctamente";

?>