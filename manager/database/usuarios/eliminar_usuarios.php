<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM usuarios WHERE Correo_Usuario = '$id'";
$resultado = $mysqli->query($sql);
?>