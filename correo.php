<?php


    if (isset ($_POST['enviar'])) {
      if (!empty ($_POST['name']) && !empty ($_POST['message']) && !empty ($_POST['email']) && (!empty ($_POST['email'])){
        $name = $_POST['name'];
        $message = $_POST['message'];
        $email = $_POST['email'];
        $header = "De: Energía Cósmica" . "\r\n";
        $header = "X-mailer : PHP/". phpversion();
        $mail= @mail($email, $message, $header);
        if ($email) {
            echo "<h4>¡ Mail ENVIADO exitosamente</h4>"
        }
      }
    }
?>