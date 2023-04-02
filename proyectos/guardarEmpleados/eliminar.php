<?php
require 'conection.php';

$id = $mysqli -> real_escape_string($_GET['id']);

$sql = "UPDATE empleado SET activo=1 WHERE id = $id";

$resultado = $mysqli -> query($sql);

if ($resultado > 0) {
   echo "REGISTRO ELIMINADO";
}
else {
    echo "ERROR AL ELIMINAR REGISTRO";
}
?>