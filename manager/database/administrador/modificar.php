<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$Correo_Usuario = $_POST['Correo_Usuario'];
$Contrasena_Usuario = $_POST['Contrasena_Usuario'];

$sql = "UPDATE usuarios SET Correo_Usuario='$Correo_Usuario', Contrasena_Usuario='$Contrasena_Usuario' WHERE IDUsuario='$id'";
$resultado = $mysqli->query($sql);
?>