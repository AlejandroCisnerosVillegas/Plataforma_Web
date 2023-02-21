<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM empresa WHERE IDEmpresa = '$id'";
$resultado = $mysqli->query($sql);
?>