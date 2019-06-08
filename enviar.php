<?php
$checkin = "Hola choco";
$checkout = $_POST['checkout'];

$mail="jeandy90@yahoo.com";
$asunto="prueba";


mail($mail,$asunto,$checkin);
   echo "Email enviado ";
