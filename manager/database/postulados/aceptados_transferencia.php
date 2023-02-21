<?php
require '../../database/conexion.php';

$id = $_POST['id'];

$sql = "INSERT INTO postulados_aceptados (Direccion_UPAceptados, Correo_UPAceptados, Titulo_UPAceptados, Fecha_UPAceptados, Nombre_DUsuario, Edad_DUsuario, Telefono_DUsuario, Nivel_DUsuario, Carrera_DUsuario, Conocimiento_DUsuario, Ciudad_DUsuario, Minicipio_DUsuario, TVacante_DUsuario, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes) SELECT archivos.direccion, archivos.correo, archivos.titulo, archivos.fecha, archivos.Nombre_DUsuario, archivos.Edad_DUsuario, archivos.Telefono_DUsuario, archivos.Nivel_DUsuario, archivos.Carrera_DUsuario, archivos.Conocimiento_DUsuario, archivos.Ciudad_DUsuario, archivos.Minicipio_DUsuario, archivos.TVacante_DUsuario, archivos.Emp_Inst_Vacantes, archivos.Estado_Vacantes, archivos.Delegacion_Vacantes, archivos.Cargo_Vacantes, archivos.Descripcion_Vacantes, archivos.Carrera_Vacantes, archivos.Conocimientos_Vacantes FROM archivos WHERE id = '$id'";
$resultado = $mysqli->query($sql);
?>