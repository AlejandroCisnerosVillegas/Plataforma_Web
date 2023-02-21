<?php
require '../../database/conexion.php';

$sql = "SELECT * FROM postulados_rechazados";
$resultado = $mysqli->query($sql);
?>