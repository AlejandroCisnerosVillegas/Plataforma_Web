<?php
require '../../database/conexion.php';

$id = $_POST['id'];

$sql = "INSERT INTO vacante_inhabilitada (Titulos_Vacantes, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes, Seccion_Vacantes, Color_Vacantes) SELECT vacante.Titulos_Vacantes, vacante.Emp_Inst_Vacantes, vacante.Estado_Vacantes, vacante.Delegacion_Vacantes, vacante.Cargo_Vacantes, vacante.Descripcion_Vacantes, vacante.Carrera_Vacantes, vacante.Conocimientos_Vacantes, vacante.Seccion_Vacantes, vacante.Color_Vacantes FROM vacante WHERE IDVacantes = '$id'";
$resultado = $mysqli->query($sql);
?>