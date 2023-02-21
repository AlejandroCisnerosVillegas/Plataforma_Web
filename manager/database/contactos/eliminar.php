<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM contacto WHERE IDContacto = '$id'";
$resultado = $mysqli->query($sql);
?>