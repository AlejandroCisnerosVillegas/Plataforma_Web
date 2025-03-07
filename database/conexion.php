<?php

	$mysqli = new mysqli('localhost', 'root', '', 'piviwnwi_piviweb');
	$mysqli -> set_charset("utf8");

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>