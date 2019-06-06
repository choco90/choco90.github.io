<?php
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$mail="jeandy90@yahoo.com";
$asunto="prueba";


if(mail($mail,$asunto,$checkin)){
   echo "Email enviado ";
}
else{
    echo "uy uy uy";
}
?>