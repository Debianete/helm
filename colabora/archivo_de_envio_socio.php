---
layout: null
permalink: /colabora/socios/archivo_de_envio_socio.php
---

<?php

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		isset($_POST['mensaje']) && !empty($_POST['mensaje']))

	{

		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = "Nuevo Socio";

		$ip = $_SERVER['REMOTE_ADDR'];
		$fecha = date ('d-m-Y');
		$hora = date ('H:i:s');
		$destino = "voluntarios@huellasweb.org";

		$headers = "From: " . $email . " \r\n";
		$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$headers .= "Mime-Version: 1.0 \r\n";
		$headers .= "Content-type: text/html; charset=utf-8";

		$texto = $_POST['mensaje'];

		$mensaje = "<h1 style='background:#34495E;color:white;text-align:center;'>Formulario de Nuevos Socios</h1>" .
		"<p style='color:#34495E;' ><b>Nombre :</b> " . $nombre . "</p>" .
		"<p style='color:#34495E;' ><b>Email :</b> " . $email . "</p>" .
		"<p style='color:#34495E;' ><b>Asunto :</b> " . $asunto . "</p>" .
		"<p style='color:#34495E;' ><b>Fecha :</b> " . $fecha . "<b>&nbsp;&nbsp;&nbsp;Hora :</b> " . $hora . "<b>&nbsp;&nbsp;&nbsp;IP :</b> " . $ip . "</p>" .
		"<p style='color:#34495E;' >" . $texto . "</p>";

		mail($destino, $asunto, $mensaje, $headers);

		header ('Location: ../socios/');

	}

?>
