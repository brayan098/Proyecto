<html>
            <head>
            <title>REGISTRO USUARIO</title>
            <meta charset="utf8">
          
            </head>
            <body>
    
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
                <h3>INGRESE CON SUS DATOS</h3>
    
            <p>Correo:<input type="text" name="correo" id="correo"/></p>  
            <p>Contraseña:<input type="password" name="Contra" id="Contra"/></p>
    
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
                    $base= new PDO("mysql:host=localhost; dbname=datos_usuario", "root","");
                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                    $sql="INSERT into datos_usuarioo (usuario,password1) values (:login,:password)";
                    $resultado=$base->prepare ($sql);

                    $corre=htmlentities(addslashes($_POST['correo']));
                    $contra=htmlentities(addslashes($_POST['Contra'])); 

                    $resultado->bindValue(":login", $corre);
                // Spassword-password_hash($contraseña->getClave(), PASSWORD_DEFAULT);
                    
                    $resultado->bindValue(":password",$contra);
                    $resultado->execute();

    
                    echo "Usuario creado";
                   
                }else{
                    echo "Contraseña insegura: ".$error_encontrado;
                }
            }
                echo "<br>";
            ?>
             <input type="submit" value="Enviar" name="enviar"/>
            </form>
            
            </body>
            </html>

