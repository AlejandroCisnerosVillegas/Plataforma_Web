<?php
require '../../database/conexion.php';

$Titulo_UPRechazados = $_POST['Titulo_UPRechazados'];
$IDUPAceptados = $_POST['IDUPAceptados'];

$tabladelavacante="SELECT * FROM vacante WHERE Titulos_Vacantes='$Titulo_UPRechazados'";
$resultadoso = $mysqli->query($tabladelavacante);
$rowes = $resultadoso->fetch_array(MYSQLI_ASSOC);

$Emp_Inst_Vacantes = $rowes['Emp_Inst_Vacantes'];
$Estado_Vacantes = $rowes['Estado_Vacantes'];
$Delegacion_Vacantes = $rowes['Delegacion_Vacantes'];
$Cargo_Vacantes = $rowes['Cargo_Vacantes'];
$Descripcion_Vacantes = $rowes['Descripcion_Vacantes'];
$Carrera_Vacantes = $rowes['Carrera_Vacantes'];
$Conocimientos_Vacantes = $rowes['Conocimientos_Vacantes'];

$tablausuario="SELECT * FROM postulados_rechazados WHERE IDUPAceptados='$IDUPAceptados'";
$resultado = $mysqli->query($tablausuario);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

$Nombre_DUsuario = $row['Nombre_DUsuario'];
$Edad_DUsuario = $row['Edad_DUsuario'];
$Telefono_DUsuario = $row['Telefono_DUsuario'];
$Nivel_DUsuario = $row['Nivel_DUsuario'];
$Carrera_DUsuario = $row['Carrera_DUsuario'];
$Conocimiento_DUsuario = $row['Conocimiento_DUsuario'];
$Ciudad_DUsuario = $row['Ciudad_DUsuario'];
$Minicipio_DUsuario = $row['Minicipio_DUsuario'];
$TVacante_DUsuario = $row['TVacante_DUsuario'];


$sql = "INSERT INTO archivos (direccion, titulo, correo, Nombre_DUsuario, Edad_DUsuario, Telefono_DUsuario, Nivel_DUsuario, Carrera_DUsuario, Conocimiento_DUsuario, Ciudad_DUsuario, Minicipio_DUsuario, TVacante_DUsuario, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes) SELECT postulados_rechazados.Direccion_UPRechazados, '$Titulo_UPRechazados', postulados_rechazados.Correo_UPRechazados, '$Nombre_DUsuario', '$Edad_DUsuario', '$Telefono_DUsuario', '$Nivel_DUsuario', '$Carrera_DUsuario', '$Conocimiento_DUsuario', '$Ciudad_DUsuario', '$Minicipio_DUsuario', '$TVacante_DUsuario', '$Emp_Inst_Vacantes', '$Estado_Vacantes', '$Delegacion_Vacantes', '$Cargo_Vacantes', '$Descripcion_Vacantes', '$Carrera_Vacantes', '$Conocimientos_Vacantes' FROM postulados_rechazados WHERE IDUPAceptados = '$IDUPAceptados'";
$resultado = $mysqli->query($sql);
?>