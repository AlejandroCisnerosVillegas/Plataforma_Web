<?php
require 'conexion.php';

$Estado_Vacantes = $_POST['Estado_Vacantes'];
$Carrera_Vacantes = $_POST['Carrera_Vacantes'];
$where = "";
$sql = "SELECT * FROM vacante WHERE Estado_Vacantes='$Estado_Vacantes' AND Carrera_Vacantes='$Carrera_Vacantes' ORDER BY IDVacantes DESC";
$resultado = $mysqli->query($sql);
?>