<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <style>
        form input[type="submit"] { 
            margin-left: 44px; 
            text-decoration: none;
            width: 100px;
            height: 30px;
            border: 1px solid #d7d7d7;
            background: #8F8E8C;
        }
            form input[type="password"], form input[type="email"] {
            display: table-cell;
            width: 300px;
            height: 20px;
            border: 1px solid #d7d7d7;
            border-radius: 3px;
        }
    </style>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            <label>Usuario: </label>
            <input type="email" name="correo" autofocus required><br>

            <label>Contraseña: </label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="enviar" value="ENVIAR">
        </div>
    </form>
</body>
</html>