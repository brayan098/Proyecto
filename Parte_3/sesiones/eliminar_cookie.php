<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE["datos_usuario"])) {
    setcookie("datos_usuario", "", time() - 3600, "/");
}

echo "Sesión cerrada con éxito";
header("location: pagina_inicio.php");
?>
