<?php
require '../../database/conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM institucion WHERE IDInstitucion = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>