<?php
$mysqli = new mysqli("localhost", "root", "", "empresa");

if ($mysqli -> connect_errno) {
    echo "fallo al conectar a MySQL: (" . $mysqli -> connect_errno . ")" . $mysqli -> connect_error;
}
?>