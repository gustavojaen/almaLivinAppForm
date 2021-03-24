<?php

	// error_reporting(0);

	$servidorBD = 'localhost';
	$usuarioBD = 'root';
	$claveBD = '';
	$nombreBD = 'salesforcetest';



	$conectar = mysqli_connect($servidorBD, $usuarioBD, $claveBD, $nombreBD);

	mysqli_set_charset($conectar, 'utf8mb4');

	if (!$conectar) {
		echo 'Error al conectar con la Base de Datos';
	}

?>