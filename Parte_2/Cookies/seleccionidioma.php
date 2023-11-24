<td aling="center"><a href="creacookie.php?idioma=sp"><img src=""
width="140" height="100" border="5"></a></td>
<td aling="center"><a href="creacookie.php?idioma=en"><img src=""
width="140" height="100" border="5"></a></td>
<?php
if (isset($_COOKIE["sel_idioma"])) {
    if($_COOKIE["sel_idioma"] == "sp"){
        header("Location: pag_español.php");
    }else if ($_COOKIE["sel_idioma"] =="en"){
        header("Location: pag_ingles.php");
    }
}
?>