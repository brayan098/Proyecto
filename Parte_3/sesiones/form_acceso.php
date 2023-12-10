<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Formulario de acceso</title>
    
</head>
<body>
       
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
        <div class="form">  
        <h1 class="titulo">Acceso al sistema</h1>
        <div class="form_c">
        <label>Usuario: </label>
        <input type="email" name="correo" required autofocus><br>
        </div>

        <div class="form_c">
        <label>Contraseña: </label>
        <input type="password" name="contraseña">
        </div>

        <div class="form_c">
        <input type="checkbox" name="recordar">
        <label>Recordarme en este equipo</label>
        
        </div>

        <div class="boton">
        <input type="submit" name="enviar" value="INGRESAR">
        </div>
        </form>
    </div>
</body>
</html>