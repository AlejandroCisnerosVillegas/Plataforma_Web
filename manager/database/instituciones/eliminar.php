<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM institucion WHERE IDInstitucion = '$id'";
$resultado = $mysqli->query($sql);
?>