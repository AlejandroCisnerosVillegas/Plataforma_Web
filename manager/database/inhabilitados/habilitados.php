<?php
require '../../database/conexion.php';

$id = $_POST['id'];

$sql = "INSERT INTO vacante (Titulos_Vacantes, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes, Seccion_Vacantes, Color_Vacantes) SELECT vacante_inhabilitada.Titulos_Vacantes, vacante_inhabilitada.Emp_Inst_Vacantes, vacante_inhabilitada.Estado_Vacantes, vacante_inhabilitada.Delegacion_Vacantes, vacante_inhabilitada.Cargo_Vacantes, vacante_inhabilitada.Descripcion_Vacantes, vacante_inhabilitada.Carrera_Vacantes, vacante_inhabilitada.Conocimientos_Vacantes, vacante_inhabilitada.Seccion_Vacantes, vacante_inhabilitada.Color_Vacantes FROM vacante_inhabilitada WHERE IDVacantes = '$id'";
$resultado = $mysqli->query($sql);
?>