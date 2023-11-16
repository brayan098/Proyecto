<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Formulario de Productos</title>
</head>
<body>
    <h1 class="titulo">GESTIÓN DE PRODUCTOS</h1>
    <div class="main-content">
        <form class="form-reg" method="get" action="insertar_productos.php">
            <div class="form-title-row">
                <h1>Agregar Producto</h1>
            </div>
            <div class="form-row">
                <label>Código de producto</label>
                <input type="text" name="c_prod" id="c_prod" required autofocus>
            </div>
            <div class="form-row">
                <label>Sección</label>
                <input type="text" name="seccion" id="seccion" required>
            </div>
            <div class="form-row">
                <label>Nombre del producto</label>
                <input type="text" name="n_prod" id="n_prod" required>
            </div>
            <div class="form-row">
                <label>País de origen</label>
                <input type="text" name="p_orig" id="p_orig" required>
            </div>
            <div class="form-row">
                <label>Importado</label>
                <select name="importado" id="importado" required>
                            <option> </option>
                            <option>VERDADERO</option>
                            <option>FALSO</option>
                </select>
            </div>
            <div class="form-row">
                <label>Precio del producto</label>
                <input type="text" name="precio" id="precio" required>
            </div>
            <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="ENVIAR">
                <input type="reset" name="borrar" id="borrar" value="LIMPIAR FORMULARIO">
            </div>
        </form>
    </div>
</body>
</html>