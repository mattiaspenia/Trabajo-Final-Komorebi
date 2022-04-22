<?php
    // para capturar la info que se ingresa en los inputs del formulario tengo que crear variables.

    $nombre = $_POST{'nombre'};
    $mail = $_POST{'email'};
    $mensaje = $_POST{'textarea'};
    
    // a quien le mando esta info?

    $para = 'matirpb@gmail.com'
    $asunto = 'Este mail fue enviado desde la web'

    // Funcion que envia la info del form

    mail($para, $asunto utf8_decode($nombre, $mail, $mensaje))
    
    // funciion que redirecciona al usuario una vez que completo el form
    header('Location:exito.html');










?>