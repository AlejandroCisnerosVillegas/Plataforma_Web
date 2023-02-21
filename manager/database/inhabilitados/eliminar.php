<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM vacante_inhabilitada WHERE IDVacantes = '$id'";
$resultado = $mysqli->query($sql);
?>