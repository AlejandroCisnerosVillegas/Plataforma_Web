<?php
require 'conexion.php';

$where = "";
$sql = "SELECT * FROM vacante ORDER BY IDVacantes DESC LIMIT 10";
$resultado = $mysqli->query($sql);
?>