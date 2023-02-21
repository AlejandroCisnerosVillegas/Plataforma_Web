<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$Nombre_Empresa = $_POST['Nombre_Empresa'];
$RFC_Empresa = $_POST['RFC_Empresa'];
$Giro_Empresa = $_POST['Giro_Empresa'];
$Vacantes_Empresa = $_POST['Vacantes_Empresa'];
$Medios_Empresa = $_POST['Medios_Empresa'];
$Estado_Empresa = $_POST['Estado_Empresa'];
$Delegacion_Empresa = $_POST['Delegacion_Empresa'];
$Colonia_Empresa = $_POST['Colonia_Empresa'];
$Calle_Empresa = $_POST['Calle_Empresa'];
$Numero_Ext_Empresa = $_POST['Numero_Ext_Empresa'];
$Numero_Int_Empresa = $_POST['Numero_Int_Empresa'];
$CodigoP_Empresa = $_POST['CodigoP_Empresa'];
$Oficinas_Empresa = $_POST['Oficinas_Empresa'];

$sql = "UPDATE empresa SET Nombre_Empresa='$Nombre_Empresa', RFC_Empresa='$RFC_Empresa', Giro_Empresa='$Giro_Empresa', Vacantes_Empresa='$Vacantes_Empresa', Medios_Empresa='$Medios_Empresa', Estado_Empresa='$Estado_Empresa', Delegacion_Empresa='$Delegacion_Empresa', Colonia_Empresa='$Colonia_Empresa', Calle_Empresa='$Calle_Empresa', Numero_Ext_Empresa='$Numero_Ext_Empresa', Numero_Int_Empresa='$Numero_Int_Empresa', CodigoP_Empresa='$CodigoP_Empresa', Oficinas_Empresa='$Oficinas_Empresa' WHERE IDEmpresa='$id'";
$resultado = $mysqli->query($sql);
?>