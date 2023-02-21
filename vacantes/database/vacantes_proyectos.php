<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante WHERE Seccion_Vacantes='Proyectos' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>