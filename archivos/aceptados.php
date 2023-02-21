<?php
require '../database/conexion.php';

$id = $_POST['IDUPAceptados'];

$sql="SELECT * FROM postulados_aceptados WHERE IDUPAceptados='$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$resul = $row['Direccion_UPAceptados'];

array_map( "unlink", glob( $resul ) );


$sql = "DELETE FROM postulados_aceptados WHERE IDUPAceptados = '$id'";
$resultado = $mysqli->query($sql);
?>