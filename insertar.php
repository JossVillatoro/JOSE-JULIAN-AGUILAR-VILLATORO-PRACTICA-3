<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    $query = "INSERT INTO productos (id, nombre, precio, existencia) VALUES ('$id_producto', '$nombre', '$precio', '$existencia')";
    
    if ($conexion->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
}
?>
