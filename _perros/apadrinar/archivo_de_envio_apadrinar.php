<?php

if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
		isset($_POST["email"]) && !empty($_POST["email"]) &&
		isset($_POST["mensaje"]) && !empty($_POST["mensaje"]))

	{

		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$perro = $_POST["perro"];

		$ip = $_SERVER["REMOTE_ADDR"];
		$fecha = date ("d-m-Y");
		$hora = date ("H:i:s");
		$destino = "adopciones@huellasweb.org";

		$headers = "From: " . $email . " \r\n";
		$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$headers .= "Mime-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8";

		$texto = $_POST["mensaje"];

		$mensaje = "Formulario de Nuevo Apadrinamiento \r\n" .
		" \r\n Nombre: " . $nombre .
		" \r\n Email: " . $email .
		" \r\n Fecha: " . $fecha .
		" \r\n Hora: " . $hora .
		" \r\n Ip: " . $ip .
		" \r\n" .
		" \r\r\n Perro: " . $perro .
		" \r\n" .
		" \r\r\n" . $texto;

		mail($destino, $headers, utf8_decode($mensaje));

		header ("Location: index.html");

	}

?>
