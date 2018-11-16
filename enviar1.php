<?php

    $destino="cerebrodigital.info@gmail.com";
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $telefono = $_POST["WhatsApp"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo . "\nTelèfono:" . $telefono . "\nMensaje:" . $mensaje;
    mail($destino,"Contacto", $contenido);
    echo "Gracias Su reserva se está procesando, por favor revise su correo o WhatsApp.";
    header("Location:https://schoolgirlish-therm.000webhostapp.com/#foodies");
    ?>