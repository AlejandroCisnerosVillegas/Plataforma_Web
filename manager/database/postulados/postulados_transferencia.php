<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$sql = "DELETE FROM archivos WHERE id = '$id'";
$resultado = $mysqli->query($sql);
?>