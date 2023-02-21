<?php
require '../../database/conexion.php';

$id = $_POST['IDUPAceptados'];
$Reporte_UPAceptados = $_POST['Reporte_UPAceptados'];

$sql = "UPDATE postulados_aceptados SET Reporte_UPAceptados='$Reporte_UPAceptados' WHERE IDUPAceptados='$id'";
$resultado = $mysqli->query($sql);
?>