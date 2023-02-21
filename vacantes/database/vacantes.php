<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>