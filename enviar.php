<?php
if($_SERVER['REQUEST_METHOD']==='POST'){}
    #PASO NUMERO 1:DECLARAMOS LAS VARIABLES
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    #paso #2:  indicamos el Destinatario
    $destinatario = 'juanpoma531@gmail.com';
    #paso #3: indicamos el asunto
    $asunto = 'Mi cliente';
    #paso #4: Diseñamos el cuerpo del mensaje
    $cuerpo = "NOMBRE: " . $nombre . "\n";
    $cuerpo .= "CORREO: " . $email . "\n";
    $cuerpo .= "TELEFONO: " . $telefono . "\n";
    $cuerpo .= "MENSAJE: " . $mensaje . "\n";
    #PASO #5 VAMOS A PASAR LAS VARIABLES A LA FUNCION MAIL
    if(mail($destinatario,$asunto,$mensaje)){
        echo "El mensaje fue enviado correctamente.";
    } else {
        echo "NO SE ENVIO JOVEN";

    }
        





















 














?>