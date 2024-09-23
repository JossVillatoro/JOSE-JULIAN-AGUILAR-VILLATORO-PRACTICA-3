<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>PRACTICA 3 - BIENVENIDO</h1>
        <form action="insertar.php" method="POST">
            <div class="form-group">
                <label for="id_producto">idProd:</label>
                <input type="text" id="id_producto" name="id_producto" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="existencia">Existencia:</label>
                <input type="text" id="existencia" name="existencia" required>
            </div>
            <button type="submit">Registrar</button>
        </form>

        <h2>Productos Registrados</h2>
        <table border="1">
            
            <thead>
                <tr>
                    <th>idProd</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM productos";
                $result = $conexion->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nombre']}</td>
                            <td>\${$row['precio']}</td>
                            <td>{$row['existencia']}</td>
                            <td><a href='eliminar.php?id={$row['id']}' class='btn-delete'>Eliminar</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
