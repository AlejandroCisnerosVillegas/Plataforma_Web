<?php
require 'conexion.php';

$sql = "SELECT * FROM postulados_rechazados ORDER BY Fecha_UPRechazados ASC";
$resultado = $mysqli->query($sql);
?>