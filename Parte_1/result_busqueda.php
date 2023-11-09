<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Encontrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    require_once("conexionbd.php");
    $busqueda = $_GET["search"];
    $consulta = "SELECT * FROM productos WHERE producto LIKE '%$busqueda%'";
    $resultado2 = mysqli_query($conexion, $consulta);

    echo '<table>';
    while ($fila = mysqli_fetch_row($resultado2)) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo '</table>';

    mysqli_close($conexion);
    ?>
</body>
</html>