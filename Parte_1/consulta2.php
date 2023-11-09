<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <?php
    require_once("conexionbd.php");
        $consulta = "SELECT * FROM productos WHERE producto ='CERAMICA'";
        $resultado = mysqli_query($conexion, $consulta);
        echo '<table>';
        while ($fila = mysqli_fetch_row($resultado)) {
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