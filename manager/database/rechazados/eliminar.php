<?php
require '../../database/conexion.php';

$id = $_POST['IDUPAceptados'];

$sql="SELECT * FROM postulados_rechazados WHERE IDUPAceptados='$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$resul = $row['Direccion_UPRechazados'];
$manos = "../../../archivos/";
$pies = $manos . $resul;

array_map( "unlink", glob( $pies ) );


$sql = "DELETE FROM postulados_rechazados WHERE IDUPAceptados = '$id'";
$resultado = $mysqli->query($sql);
?>