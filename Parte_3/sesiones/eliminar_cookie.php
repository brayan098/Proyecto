<?php
$cookies = $_COOKIE;

foreach($cookies as $nombre => $valor) {
    setcookie($nombre, "", time() - 3600, "/");
}

echo "Todas las cookies eliminadas con éxito";
header("location: pagina_inicio.php");
?>
