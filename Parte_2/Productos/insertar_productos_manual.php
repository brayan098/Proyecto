<?php
    require_once("conexionbd.php");
    
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    if(mysqli_connect_errno()){
        echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
        exit();
    }
    
    mysqli_select_db($conexion, $db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");
    
    //$consulta = "INSERT INTO productos(id_producto, seccion, producto, origen, importada, precio) VALUES ('ar39', 'FERRETERIA', 'Pela cables', 'China', 'VERDADERO', 10000)";
    //$resultado2 = mysqli_query($conexion, $consulta);
    
    mysqli_close($conexion);
    ?>