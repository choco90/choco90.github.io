<?php
$checkin =  $_POST['checkin'];
$checkout = $_POST['checkout'];
$adultos= $_POST['adultos'];
$criancas= $_POST['criancas'];

$mail=$_POST['email'];

//$mail="jeandy90@yahoo.com";
$asunto="prueba";
$response=1;
$mensaje="La reserva es para   ".$adultos ." adultos  y ".$criancas."  criancas ";
mail($mail,$asunto,$mensaje);
   echo $response;
