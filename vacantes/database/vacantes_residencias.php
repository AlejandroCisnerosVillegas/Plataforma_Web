<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante WHERE Seccion_Vacantes='Residencias Profesionales' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>