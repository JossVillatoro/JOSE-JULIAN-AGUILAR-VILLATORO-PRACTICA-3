<?php
$host = "localhost"; 
$user = "root"; 
$password = "1022"; 
$db = "inventario"; 

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
