<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante WHERE Seccion_Vacantes='SS-PP-RP-B' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>