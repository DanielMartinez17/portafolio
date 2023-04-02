<?php
require 'conection.php';

$id = $mysqli -> real_escape_string($_POST['id']);
$nombre = $mysqli -> real_escape_string($_POST['nombre']);
$telefono = $mysqli -> real_escape_string($_POST['telefono']);
$fecha_nacimiento = $mysqli -> real_escape_string($_POST['fecha_nacimiento']);
$estado_civil = $mysqli -> real_escape_string($_POST['estado_civil']);

$sql = "UPDATE empleado SET nombre ='$nombre', telefono='$telefono',fecha_nacimiento='$fecha_nacimiento',estado_civil='$estado_civil' WHERE id = $id";

$resultado = $mysqli -> query($sql);

if ($resultado > 0) {
   echo "REGISTRO ACTUALIZAR";
}
else {
    echo "ERROR AL ACTUALIZAR REGISTRO";
}
?>