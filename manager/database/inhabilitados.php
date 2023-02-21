<?php
require 'conexion.php';

$sql = "SELECT * FROM vacante_inhabilitada ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>