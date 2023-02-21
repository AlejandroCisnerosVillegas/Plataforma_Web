<?php

	$mysqli = new mysqli('Ip_Address', 'User', 'Password', 'Name_DataBase');
	$mysqli -> set_charset("utf8");

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>
