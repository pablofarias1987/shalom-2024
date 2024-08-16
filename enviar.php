<?php
	$destino = "pfgallardo1987@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];
	$contenido = "\nNombre: " . $nombre . "\n\nCorreo: " . $correo . "\n\nAsunto: " . $asunto . "\n\nMensaje: ". $mensaje;
	mail($destino, $asunto , $contenido);
	header("Location:gracias.html");



?>