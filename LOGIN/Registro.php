<?php
require 'coneccion.php';

if($_POST['#usuario'] && $_POST['#correo'] && $_POST['#contrasena']) {
    $usuario = $_POST['#usuario'];
    $contrasena = hash('sha256', $_POST['#contrasena'], true);
    $correo = $_POST['#correo'];

    $consulta = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usuario', '$correo', '$contrasena')";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado) {
        echo "Registro exitoso";
    } else {
        echo "Error en el registro: " . mysqli_error($conexion);
    }
}
?>