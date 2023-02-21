<?php
require 'conexion.php';

$sql = "SELECT * FROM empresa ORDER BY Nombre_Empresa ASC";
$resultado = $mysqli->query($sql);
?>