<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprado</title>
</head>
<body>
<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'andrea';
$dbPassword = 'andrea';
$dbName = 'adrea';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
</body>
</html>
