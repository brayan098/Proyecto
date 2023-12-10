<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilos.css">
  
  <title>Document</title>
</head>
<body>
<?php
$autenticar=false;

if (isset($_POST["enviar"])){
  try {
      $base= new PDO("mysql:host=localhost; dbname=usuario", "root","");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * FROM datos_usuario WHERE usuario= :login AND contraseña= :password";
      $resultado=$base->prepare ($sql);
      $corre=htmlentities(addslashes($_POST["correo"]));
      $contra=htmlentities(addslashes($_POST["contraseña"])); 
      $resultado->bindValue(":login", $corre);

      $password-password_hash($contraseña->getClave(), PASSWORD_DEFAULT);

      $resultado->bindValue(":password",$contra);

      $resultado->execute();

      $numero_registro=$resultado->rowCount();
      echo $numero_registro;
      if ($numero_registro!=0) {
          $autenticar=true;
          if(isset($_POST["recordar"])){
            setcookie("datos_usuario",$_POST["correo"],time()+1220000);
          }else{
            echo "Los datos son correctos";
           }
      }
      else {
        echo "Los datos son incorrectos";
      }

     

 }  
catch(Exception $e){
    die("Error:". $e->getMessage());}
}

?>
 <header>
  <h1 class="title" align="center">Pagina de las flores del campo</h1>
  <?php
    if($autenticar==false){
      if(!isset($_COOKIE["datos_usuario"])){
        include("form_acceso.php");
      }
    }
  ?>
  </header>
  <nav>
        <ul class="menu_1">
            <li><a href="#">Acerca de</a>
            <li><a href="#">Archivos</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Contacto</a></li>

        </ul>
    </nav>
    <?php
    
      if($autenticar==true || isset($_COOKIE["datos_usuario"])){
          include("perfil_usuario.php");
      }
    
  ?>
</body>
</html>


