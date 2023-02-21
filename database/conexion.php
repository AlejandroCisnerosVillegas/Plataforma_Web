<?php

	$mysqli = new mysqli('Ip_Address', 'User', 'Password', 'DataBase_Name');
	$mysqli -> set_charset("utf8");

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>
