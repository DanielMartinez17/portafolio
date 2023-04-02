<?php
require 'conection.php';

$id = $mysqli -> real_escape_string($_GET['id']);

$sql = "SELECT id, nombre, telefono, fecha_nacimiento, estado_civil FROM empleado WHERE id=$id LIMIT 1;";

$resultado = $mysqli -> query($sql);

$fila = $resultado -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Empresa</title>
</head>
<body>
    <div class="container-md">
        <div class="row">
            <h1>Empleados</h1>
        </div>

        <div class="row">
            <form action="actualizar.php" method="post" id="registro" name="registro" autocomplete="off">
                <input type="hidden" id ="id" name="id" value="<?php echo $fila['id']?>">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form form-control" name="nombre" id="nombre" placeholder="Introdusca su nombre" autofocus required value ="<?php echo $fila['nombre']?>">
                </div>

                <div class="form form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form form-control" name="telefono" id="telefono" placeholder="Introdusca el teléfono" required value ="<?php echo $fila['telefono']?>">
                </div>

                <div class="form form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Introdusca la fecha de nacimiento" required value ="<?php echo $fila['fecha_nacimiento']?>">
                </div>

                <div class="form form-group">
                    <label for="estado_civil">Estado cívil</label>
                    <select class="form form-control" name="estado_civil" id="estado_civil" placeholder="Seleccione el estado cívil" required>
                        <option value="Soltero" <?php if ('Soltero' == $fila['estado_civil']) {
                            echo 'selected';} ?>>Soltero</option>
                        <option value="Casado" <?php if ('Casado' == $fila['estado_civil']) {
                            echo 'selected';} ?>>Casado</option>
                        <option value="Otro" <?php if ('Otro' == $fila['estado_civil']) {
                            echo 'selected';} ?>>Otro</option>
                    </select>
                </div>
                <div class="form form-group">
                    <button class="btn btn-primary" id="guarda" name="guarda" type="submit">Guardar</button>
                </div>

            </form>
        </div>
    </div>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>