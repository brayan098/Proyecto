<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilos.css?ver=1.0">

  <title>FORMULARIO</title>
</head>

<body>
  <?php
  $autenticar = false;

  if (isset($_POST["enviar"])) {
    try {
      $base = new PDO("mysql:host=localhost; dbname=usuario", "root", "");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM datos_usuario WHERE usuario= :login AND contraseña= :password";
      $resultado = $base->prepare($sql);
      $corre = htmlentities(addslashes($_POST["correo"]));
      $contra = htmlentities(addslashes($_POST["contraseña"]));
      $resultado->bindValue(":login", $corre);


      $resultado->bindValue(":password", $contra);

      $resultado->execute();

      $numero_registro = $resultado->rowCount();
      echo $numero_registro;
      if ($numero_registro != 0) {
        $autenticar = true;
        if (isset($_POST["recordar"])) {
          setcookie("datos_usuario", $_POST["correo"], time() + 1220000);
        } else {
          echo "Los datos son correctos";
        }
      } else {
        echo "Los datos son incorrectos";
      }
    } catch (Exception $e) {
      die("Error:" . $e->getMessage());
    }
  }

  ?>
  <header>
    <h1 class="title" align="center">Pagina de información automóviles</h1>
    <?php
    if ($autenticar == false) {
      if (!isset($_COOKIE["datos_usuario"])) {
        include("form_acceso.php");
      }
    }
    ?>
  </header>
  <?php

  if ($autenticar == true || isset($_COOKIE["datos_usuario"])) {
    include("perfil_usuario.php");
  }

  ?>
  <div class="titulo2">
    <p>
    <h1>ALTO PRECIO DE LOS VEHÍCULOS NUEVOS</h1>
    </p>
  </div>
  <div class="container">
    <div class="image-container">

        <img src="../imagenes/imagen1.jpeg">
      
      </div>
      <div class="Texto">
        <p>
          <alingh3>En los últimos años, el alto precio de los vehículos nuevos en Colombia se ha convertido en un tema de preocupación para muchos ciudadanos. La adquisición de un automóvil se ha vuelto cada vez más difícil debido a diversos factores que influyen en su costo final.
            Uno de los principales factores que contribuyen al alto precio de los vehículos nuevos en Colombia es la carga impositiva.
            Los impuestos sobre la importación de vehículos son considerablemente altos, lo que eleva significativamente el costo para los consumidores. Además, existen otros impuestos y tasas adicionales que se suman al precio final, como el Impuesto sobre las Ventas (IVA) y los aranceles aduaneros, lo que encarece aún más el proceso de compra.
            Otro aspecto que influye en el alto precio de los vehículos nuevos es el costo de producción y distribución. Las compañías automotrices deben invertir en tecnología avanzada, investigación y desarrollo, así como en mano de obra calificada para fabricar automóviles modernos y seguros. Además, el transporte de los vehículos desde los centros de producción hasta los concesionarios también implica gastos considerables.
            La fluctuación en el valor de la moneda también puede afectar el precio de los vehículos nuevos. Colombia ha experimentado cambios en la tasa de cambio, lo que puede hacer que los automóviles importados sean más costosos. Esto se debe a que las empresas que importan vehículos deben pagar más por ellos debido a la devaluación de la moneda local.
            Además, los altos costos de mantenimiento y la escasez de repuestos también contribuyen al precio final de los vehículos nuevos. Los fabricantes suelen establecer altos márgenes de beneficio en la venta de piezas de repuesto, lo que puede hacer que el mantenimiento de un vehículo sea costoso a largo plazo.
            La combinación de todos estos factores ha llevado a un escenario en el que adquirir un vehículo nuevo se ha vuelto un desafío para muchos colombianos. Esto ha generado la necesidad de buscar alternativas, como la compra de vehículos usados o la adquisición de vehículos a través de financiamiento.
            <alingh3>
        </p>
      </div>
    </div>
    <br>
    <nav>
      <ul class="menu_1">
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Archivos</a></li>
        <li><a href="eliminar_cookie.php">Cerrar sesión</a></li>


      </ul>
    </nav>

</body>

</html>