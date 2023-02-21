<?php
require '../../database/conexion.php';

$Titulos_Vacantes = $_POST['Titulos_Vacantes'];
$Emp_Inst_Vacantes = $_POST['Emp_Inst_Vacantes'];
$Estado_Vacantes = $_POST['Estado_Vacantes'];
$Delegacion_Vacantes = $_POST['Delegacion_Vacantes'];
$Cargo_Vacantes = $_POST['Cargo_Vacantes'];
$Descripcion_Vacantes = $_POST['Descripcion_Vacantes'];
$Carrera_Vacantes = $_POST['Carrera_Vacantes'];
$Conocimientos_Vacantes = $_POST['Conocimientos_Vacantes'];
$Seccion_Vacantes = $_POST['Seccion_Vacantes'];
$Color_Vacantes = $_POST['Color_Vacantes'];

$sql = "INSERT INTO vacante (IDVacantes, Titulos_Vacantes, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes, Seccion_Vacantes, Color_Vacantes) VALUES ('', '$Titulos_Vacantes', '$Emp_Inst_Vacantes', '$Estado_Vacantes', '$Delegacion_Vacantes', '$Cargo_Vacantes', '$Descripcion_Vacantes', '$Carrera_Vacantes', '$Conocimientos_Vacantes', '$Seccion_Vacantes', '$Color_Vacantes')";
$resultado = $mysqli->query($sql);
?>