<?php
require '../../database/conexion.php';

$id = $_POST['IDUPAceptados'];
$Reporte_UPRechazados = $_POST['Reporte_UPRechazados'];

$sql = "UPDATE postulados_rechazados SET Reporte_UPRechazados='$Reporte_UPRechazados' WHERE IDUPAceptados='$id'";
$resultado = $mysqli->query($sql);
?>