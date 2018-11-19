<?php

    $destino="cerebrodigital.info@gmail.com";
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $comensales = $_POST["comensales"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $telefono = $_POST["WhatsApp"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo . "\nTelèfono:" . $telefono . "\nMensaje:" . $mensaje;
    mail($destino,"Contacto", $contenido);
   
    header("Location:https://schoolgirlish-therm.000webhostapp.com/gracias.html");
    ?>