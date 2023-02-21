<?php
require '../../database/conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM vacante_inhabilitada WHERE IDVacantes = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>