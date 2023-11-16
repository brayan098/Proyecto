<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORRAR COOKIE</title>
</head>
<body>
<?php
    setcookie("micookie", "LOS DATOS DE LA COOKIE", time()-1);
    ?>
</body>
</html>
    