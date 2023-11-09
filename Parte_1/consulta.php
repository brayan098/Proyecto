<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <table>
</head>
<body>
    <tr>
        <th>NO. DOCUMENTO</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>EDAD</th>
    <?php
    require_once("conexionbd.php");

    $consulta = "SELECT * FROM datospersonales";
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
    <a href="consulta2.php" class="ir-button">Consulta 2</a>
    </table>
</body>
</html>