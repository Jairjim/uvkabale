<?php
error_reporting(E_ALL);
$from = "contacto@uvkabale.com";
$to = "A01632853@tec.mx";
$subject = "Test de correo";
$message = "Gracias por llenar nuestro formulario de contacto en uvkabale.com, recuerda que nuestro horario de atención es de 9am - 6pm";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
if(!$mail){
    echo "Ocurrio un error al mandar el correo";
}else{
    echo "Correo enviado existosamente";
}


?>