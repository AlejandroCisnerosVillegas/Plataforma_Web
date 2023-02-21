<?php
require 'conexion.php';

$sql = "SELECT * FROM contacto ORDER BY Nombre_Contacto ASC";
$resultado = $mysqli->query($sql);
?>