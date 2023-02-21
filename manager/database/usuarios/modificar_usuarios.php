<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$Contrasena_Usuario = $_POST['Contrasena_Usuario'];
$Correo_Usuario = $_POST['Correo_DUsuario'];

$sql = "UPDATE usuarios SET Correo_Usuario='$Correo_Usuario', Contrasena_Usuario='$Contrasena_Usuario' WHERE Correo_Usuario='$id'";
$resultado = $mysqli->query($sql);
?>