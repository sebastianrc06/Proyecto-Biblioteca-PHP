<?php
$host = "localhost";
$user = "root";
$pass = "admin";
$db = "login";
$port = "3306";

$conexion = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conexion) {
    echo "Conexión fallida: " . mysqli_connect_error();
} else {
    echo "Conexión exitosa";
}
?>