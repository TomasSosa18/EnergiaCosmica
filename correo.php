<?php
$destino = "tomasgeronimopaiva@gmail.com";
$name = $_POST["name"];
$mail = $_POST["email"];
$mensaje = $_POST["message"]
$contenido = "Nombre: " . $name . "\nCorreo: " $email . "\nMensaje: " . $message;
email($destino, "Contacto", $contenido);
header("Location:index.html");
?>