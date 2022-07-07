<?php

    $destinatario ='tomasgeronimopaiva@gmail.com'

    $nombre = $_POST['name'];
    $mail = $_POST['email'];
    $mensaje = $_POST['message'];

    $header = "Energía Cósmica"
    $mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail ($destinatario, $mensajecompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>