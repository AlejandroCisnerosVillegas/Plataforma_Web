<?php
require 'conexion.php';

$sql = "SELECT * FROM vacante ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>