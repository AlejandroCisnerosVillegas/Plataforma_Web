<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM datos_usuario WHERE Correo_DUsuario = '$id'";
$resultado = $mysqli->query($sql);
?>