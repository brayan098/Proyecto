<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <?php
    $mipagina=$_SERVER["PHP_SELF"];
        

    require_once("conexionbd.php");

    $selector =isset($_GET["selector"]);
    if ($selector == "1") {
        $selector="producto";
        $busca="Tubos";
        $consulta = "SELECT * FROM productos WHERE '$selector' ='%$busca%'";
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
    }

echo $selector;
    if (isset($_GET["selector"])) {
        
    }

    ?>
    <div class='main-content'>
    <form class='form-search' method='get' action='<?php $mipagina ?>' >
            <select name="selector" id="lang" style="font-size: 30px; " required>
                <option></option>
                <option value="producto">Socio</option>
                <option value="8">Asociado</option>
            </select>
            <button type='submit'>Buscar</button>

        </form>
    </div>


</body>
</html>