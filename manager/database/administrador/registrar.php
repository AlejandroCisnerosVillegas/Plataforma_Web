<?php
require '../../database/conexion.php';

$Correo_Usuario = $_POST['Correo_Usuario'];
$Contrasena_Usuario = $_POST['Contrasena_Usuario'];

$sql = "INSERT INTO usuarios (IDUsuario, Correo_Usuario, Contrasena_Usuario, tipo) VALUES ('', '$Correo_Usuario', '$Contrasena_Usuario', 'Admin')";
$resultado = $mysqli->query($sql);
?>