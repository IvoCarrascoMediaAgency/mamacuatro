<?php

    $destino="jaimeivankaya@hotmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nTelèfono:" . "\nMensaje:" . $mensaje;
    mail($destino,"Contacto", $contenido);
    
    ?>