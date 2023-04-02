<?php
require 'conection.php';

$sql = "SELECT id, nombre, telefono, fecha_nacimiento, estado_civil FROM empleado WHERE activo= 0";

$resultado = $mysqli -> query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <title>Empresa</title>

    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>

</head>
<body>
    <div class="container-md">
        <div class="row">
            <h1 align="center">Empleados</h1>
        </div>

        <table id="tabla" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Estado civil</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($fila = $resultado -> fetch_assoc ()) {?>
                <tr>
                    <th><?php echo $fila['nombre'];?></th>
                    <th><?php echo $fila['telefono'];?></th>
                    <th><?php echo $fila['fecha_nacimiento'];?></th>
                    <th><?php echo $fila['estado_civil'];?></th>
                    <th><a href="editar.php?id=<?php echo $fila['id']?>" class="btn btn-warning">Editar</a></th>
                    <th><a href="eliminar.php?id=<?php echo $fila['id']?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
                <?php }?> 
            </tbody>
        </table>
        <br><br>
        <div class="row">
            <a href="agregar.php" class="btn btn-primary">Agregar</a>
        </div>
    </div>
</body>
</html>