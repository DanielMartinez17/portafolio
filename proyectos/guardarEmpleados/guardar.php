<?php
require 'conection.php';

$nombre = $mysqli -> real_escape_string($_POST['nombre']);
$telefono = $mysqli -> real_escape_string($_POST['telefono']);
$fecha_nacimiento = $mysqli -> real_escape_string($_POST['fecha_nacimiento']);
$estado_civil = $mysqli -> real_escape_string($_POST['estado_civil']);

$sql = "INSERT INTO empleado (nombre, telefono, fecha_nacimiento, estado_civil) VALUES ('$nombre','$telefono','$fecha_nacimiento','$estado_civil')";

$resultado = $mysqli -> query($sql);

if ($resultado > 0) {
   echo "REGISTRO AGREGADO";
}
else {
    echo "ERROR AL AGREGAR REGISTRO";
}
?>