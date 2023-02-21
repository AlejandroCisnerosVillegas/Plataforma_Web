<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante WHERE Seccion_Vacantes='Bolsa de Trabajo' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>