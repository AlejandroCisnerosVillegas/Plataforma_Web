<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM usuarios WHERE IDUsuario = '$id'";
$resultado = $mysqli->query($sql);
?>