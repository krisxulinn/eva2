<?php
include_once 'conexion.php';

$con = new Conexion();
$connection = $con->getConnection();

if ($connection) {
    echo "Conexión exitosa!";
    $con->closeConnection();
} else {
    echo "Error de conexión: " . mysqli_connect_error();
}
?>
