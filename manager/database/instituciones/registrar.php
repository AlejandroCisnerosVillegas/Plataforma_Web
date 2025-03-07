<?php
require '../../database/conexion.php';

$Nombre_Institucion = $_POST['Nombre_Institucion'];
$Clave_Institucion = $_POST['Clave_Institucion'];
$Nivel_Institucion = $_POST['Nivel_Institucion'];
$Dependencia_Institucion = $_POST['Dependencia_Institucion'];
$Turno_Institucion = $_POST['Turno_Institucion'];
$Carreras_Institucion = $_POST['Carreras_Institucion'];
$Vacantes_Institucion = $_POST['Vacantes_Institucion'];
$Medios_Institucion = $_POST['Medios_Institucion'];
$Estado_Institucion = $_POST['Estado_Institucion'];
$Delegacion_Institucion = $_POST['Delegacion_Institucion'];
$Colonia_Institucion = $_POST['Colonia_Institucion'];
$Calle_Institucion = $_POST['Calle_Institucion'];
$Numero_Ext_Institucion = $_POST['Numero_Ext_Institucion'];
$Numero_Int_Institucion = $_POST['Numero_Int_Institucion'];
$CodigoP_Institucion = $_POST['CodigoP_Institucion'];
$Nombre_Plantel = $_POST['Nombre_Plantel'];

$sql = "INSERT INTO institucion (Nombre_Institucion, Clave_Institucion, Nivel_Institucion, Dependencia_Institucion, Turno_Institucion, Carreras_Institucion, Vacantes_Institucion, Medios_Institucion, Estado_Institucion, Delegacion_Institucion, Colonia_Institucion, Calle_Institucion, Numero_Ext_Institucion, Numero_Int_Institucion, CodigoP_Institucion, Nombre_Plantel) VALUES ('$Nombre_Institucion', '$Clave_Institucion', '$Nivel_Institucion', '$Dependencia_Institucion', '$Turno_Institucion', '$Carreras_Institucion', '$Vacantes_Institucion', '$Medios_Institucion',
'$Estado_Institucion', '$Delegacion_Institucion', '$Colonia_Institucion', '$Calle_Institucion', '$Numero_Ext_Institucion', '$Numero_Int_Institucion', '$CodigoP_Institucion', '$Nombre_Plantel')";
$resultado = $mysqli->query($sql);
?>