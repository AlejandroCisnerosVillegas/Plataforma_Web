<?php
require 'conexion.php';

$sql = "SELECT * FROM usuarios WHERE tipo='Admin' ORDER BY Correo_Usuario ASC";
$resultado = $mysqli->query($sql);
?>