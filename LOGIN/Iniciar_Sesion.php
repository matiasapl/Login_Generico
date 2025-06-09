<?php
require 'coneccion.php';

if($_POST['#usuario'] && $_POST['#contrasena']) {
    $usuario = $_POST['#usuario'];
    $contrasena = hash('sha256', $_POST['#contrasena'], true);

    

    $consulta = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($resultado) > 0) {
        echo "Inicio de sesión exitoso";
        echo "consulta: " . $consulta;
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>
