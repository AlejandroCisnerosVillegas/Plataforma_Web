<?php
require 'conexion.php';

$sql = "SELECT * FROM postulados_aceptados ORDER BY Fecha_UPAceptados ASC";
$resultado = $mysqli->query($sql);
?>