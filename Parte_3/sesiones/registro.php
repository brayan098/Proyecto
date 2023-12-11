<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilosreg.css">
        <title>Registro Usuario </title>
</head>
    </head>
        <body>
    
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
            <h3>INGRESE CON SUS DATOS</h3>
    
        <p>Correo: <input type="text" name="correo" id="correo" autofocus required /></p>  
        <p>Contraseña: <input type="password" name="Contra" id="Contra"/></p>
    
            <script>
                $(document).ready(function ($) {
                    $('#Contra').strength({
                        strengthClass: 'strength',
                        strengthMeterClass: 'strength_meter',
                        strengthButtonClass: 'button_strength',
                        strengthButtonText: 'Mostrar Contraseña',
                        strengthButtonTextToggle: 'Ocultar Contraseña'
                    });
                });
            </script>
           
           
    <?php

        $error_encontrado="";
        $vali="";
        require_once("validacion_contra.php");
        if(isset($_POST["enviar"])){
            if(validar_clave($_POST['Contra'],$error_encontrado)){
                echo "Contraseña segura"."<br>";
                $base= new PDO("mysql:host=localhost; dbname=usuario", "root","");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql="INSERT into datos_usuario (usuario, contraseña) values (:login,:password)";
                $resultado=$base->prepare ($sql);

                $corre=htmlentities(addslashes($_POST['correo']));
                $contra=htmlentities(addslashes($_POST['Contra'])); 

                $resultado->bindValue(":login", $corre);
                // Spassword-password_hash($contraseña->getClave(), PASSWORD_DEFAULT);
                    
                $resultado->bindValue(":password",$contra);
                $resultado->execute();
                echo '<script>alert("La cuenta fue creada correctamente");</script>';
                echo '<script>window.location.href="pagina_inicio.php";</script>';  
                
   
                }else{
                    echo "Contraseña insegura: ".$error_encontrado;
                }
            }
                echo "<br>";
        ?>
        <input type="submit" value="Registrar" name="enviar"/>
        <a href="pagina_inicio.php" class="iniciar">Iniciar Sesión</a>

    </form>

    </body>
</html>

