<?php
require '../../database/conexion.php';

$id = $_POST['IDUPAceptados'];

$sql = "DELETE FROM postulados_rechazados WHERE IDUPAceptados = '$id'";
$resultado = $mysqli->query($sql);
?>