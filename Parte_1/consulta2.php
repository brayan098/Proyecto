<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<table>
    <tr>
            <th>ID</th>
            <th>SECCION</th>
            <th>PRODUCTO</th>
            <th>ORIGEN</th>
            <th>IMPORTADO</th>
            <th>PRECIO</th>

    <?php
    require_once("conexionbd.php");
        $consulta = "SELECT * FROM productos WHERE seccion ='CERAMICA'";
        $resultado = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
        }
        mysqli_close($conexion);
    ?>
    </tr>
    </table>
    <br>
    <a href="consulta.php" class="ir-button">Consulta</a>
    <a href="form_busqueda.php" class="search-button">Búsqueda</a>
</body>
</html>