<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante WHERE Seccion_Vacantes='Servicio Social' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>