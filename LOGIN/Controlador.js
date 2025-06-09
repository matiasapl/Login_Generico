$(document).ready(function(){
    $.ajax({
        url: 'Iniciar_Sesion.php',
        type: 'POST',
        data: {
            accion: 'iniciar_sesion',
            usuario: $('#usuario').val(),
            contrasena: $('#contrasena').val()
        },
        success: function(response){
            // Manejar la respuesta del servidor
            console.log(response);
        }
    });

    $.ajax({
        url: 'Registro.php',
        type: 'POST',
        data: {
            accion: 'registrar',
            usuario: $('#usuario').val(),
            correo: $('#correo').val(),
            contrasena: $('#contrasena').val()
        },
        success: function(response){
            // Manejar la respuesta del servidor
            console.log(response);
        }
    });
});