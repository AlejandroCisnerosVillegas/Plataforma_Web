<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$Nombre_Contacto = $_POST['Nombre_Contacto'];
$Emp_Inst_Contacto = $_POST['Emp_Inst_Contacto'];
$Area_Contacto = $_POST['Area_Contacto'];
$Telefono_Contacto = $_POST['Telefono_Contacto'];
$Celular_Contacto = $_POST['Celular_Contacto'];
$Correo_Contacto = $_POST['Correo_Contacto'];

$sql = "UPDATE contacto SET Nombre_Contacto='$Nombre_Contacto', Emp_Inst_Contacto='$Emp_Inst_Contacto', Area_Contacto='$Area_Contacto', Telefono_Contacto='$Telefono_Contacto', Celular_Contacto='$Celular_Contacto', Correo_Contacto='$Correo_Contacto' WHERE IDContacto='$id'";
$resultado = $mysqli->query($sql);
?>