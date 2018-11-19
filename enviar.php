<?php
 	$destino= "carlos.acrif@gmail.com";
 	$nombre = $_POST["name"];
 	$email = $_POST["email"];
	$message = $_POST["message"];
	$contenido = "Name: " . $nombre . "\nEmail: " . $email . "\nMessage: " . $message;

	mail($destino,"Contact", $contenido);
	header("Location:index.php");

?>