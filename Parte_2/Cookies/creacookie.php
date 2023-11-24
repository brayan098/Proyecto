<?php
setcookie("sel_idioma", $_GET["idioma"], time() + 2629750);
header("Location: cookie_idioma.php");
?>