---
layout: null
permalink: /colabora/voluntarios/archivo_de_envio_voluntario.php
---

<?php

if (isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
	isset($_POST["email"]) && !empty($_POST["email"]) &&
	isset($_POST["mensaje"]) && !empty($_POST["mensaje"]))

	{

		$nombre = $_POST["nombre"];
		$email = $_POST["email"];

		$ip = $_SERVER["REMOTE_ADDR"];
		$fecha = date ("d-m-Y");
		$hora = date ("H:i:s");
		$destino = "voluntarios@huellasweb.org";



		$headers = "From: " . $email . " Formulario Voluntarios H.E.L.M \r\n";
		$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$headers .= "Mime-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html;charset=utf-8";


		$texto = $_POST["mensaje"];

		$mensaje = "<span style='font-size:2em;color:#fff;background:#39f;'>Formulario de Nuevo Voluntario</span><br />" .
		"<br /><span style='font-size:1.1em;color:orange;'>Nombre: </span>" . "<span style='color:#39f;'>" . $nombre . " </span>" .
		"<span style='font-size:1.1em;color:orange;'>Email: </span>" . "<span style='color:#39f;'>" . $email . " </span><br />" .
		"<span style='font-size:1.1em;color:orange;'>Fecha: </span>" . "<span style='color:#39f;'>" . $fecha . " </span>" .
		"<span style='font-size:1.1em;color:orange;'>Hora: </span>" . "<span style='color:#39f;'>" . $hora . " </span>" .
		"<span style='font-size:1.1em;color:orange;'>Ip: </span>" . "<span style='color:#39f;'>" . $ip . " </span><br />" .
		"<br /><span style='font-size:2em;color:#fff;background:#39f;'>Mensaje </span><br />" . "<span style='font-size:1.1em;color:#39f;'><br />" . $texto . " <span/>";

		mail($destino, $mensaje, $headers);

		header ("Location: ../voluntarios/");

	}

?>
