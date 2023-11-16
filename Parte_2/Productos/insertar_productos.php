<?php
    require_once("conexionbd.php");
    
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    
    if(mysqli_connect_errno()){
        echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

    $id=$_POST["c_prod"];
    $sec=$_POST["seccion"];
    $prod=$_POST["n_prod"];
    $org=$_POST["p_orig"];
    $imp=$_POST["importado"];
    $prec=$_POST["precio"];

    $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen, importada, precio) VALUES ('$id', '$sec', '$prod', '$org', '$imp', '$prec')";
    $resultado2 = mysqli_query($conexion, $consulta);
    
    mysqli_close($conexion);
    ?>