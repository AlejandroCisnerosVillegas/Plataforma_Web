<?php
require '../../database/conexion.php';

$id = $_POST['id'];
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

$sql = "UPDATE vacante SET Titulos_Vacantes='$Titulos_Vacantes', Emp_Inst_Vacantes='$Emp_Inst_Vacantes', Estado_Vacantes='$Estado_Vacantes', Delegacion_Vacantes='$Delegacion_Vacantes', Cargo_Vacantes='$Cargo_Vacantes', Descripcion_Vacantes='$Descripcion_Vacantes', Carrera_Vacantes='$Carrera_Vacantes', Conocimientos_Vacantes='$Conocimientos_Vacantes', Seccion_Vacantes='$Seccion_Vacantes', Color_Vacantes='$Color_Vacantes' WHERE IDVacantes='$id'";
$resultado = $mysqli->query($sql);
?>