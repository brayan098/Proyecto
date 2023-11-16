<?php
    require_once("conexionbd.php");
    
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    if(mysqli_connect_errno()){
        echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");

    if(isset($_GET["enviar"])){
        $id=$_GET["c_prod"];
        $sec=$_GET["seccion"];
        $prod=$_GET["n_prod"];
        $org=$_GET["p_orig"];
        $imp=$_GET["importado"];
        $prec=$_GET["precio"];

        $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen, importada, precio) VALUES('$id', '$sec', '$prod', '$org', '$imp', '$prec')";
        $resultado2 = mysqli_query($conexion, $consulta);

        echo '<script>alert("Los productos fueron insertados correctamente");</script>';
        echo '<script>window.location.href="form_registro.php";</script>';
        
       
        
    }
        
    mysqli_close($conexion);
    ?>