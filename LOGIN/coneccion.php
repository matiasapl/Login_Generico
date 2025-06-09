<?php
$conexion = mysqli_connect("localhost", "root", "admin", "Login");
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
