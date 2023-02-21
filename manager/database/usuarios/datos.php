<?php
require '../../database/conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuario_administrador WHERE Correo_DUsuario = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>