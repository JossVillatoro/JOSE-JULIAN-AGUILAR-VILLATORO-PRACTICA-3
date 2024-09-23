<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM productos WHERE id='$id'";
    if ($conexion->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }
}
?>
