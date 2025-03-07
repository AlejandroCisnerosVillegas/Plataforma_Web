<?php
require '../../database/conexion.php';

$Nombre_Contacto = $_POST['Nombre_Contacto'];
$Emp_Inst_Contacto = $_POST['Emp_Inst_Contacto'];
$Area_Contacto = $_POST['Area_Contacto'];
$Telefono_Contacto = $_POST['Telefono_Contacto'];
$Celular_Contacto = $_POST['Celular_Contacto'];
$Correo_Contacto = $_POST['Correo_Contacto'];

$sql = "INSERT INTO contacto (Nombre_Contacto, Emp_Inst_Contacto, Area_Contacto, Telefono_Contacto, Celular_Contacto, Correo_Contacto) VALUES ('$Nombre_Contacto', '$Emp_Inst_Contacto', '$Area_Contacto', '$Telefono_Contacto', '$Celular_Contacto', '$Correo_Contacto')";
$resultado = $mysqli->query($sql);
?>