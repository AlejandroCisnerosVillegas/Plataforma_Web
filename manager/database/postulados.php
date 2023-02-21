<?php
require 'conexion.php';

$sql = "SELECT * FROM archivos ORDER BY id DESC";
$resultado = $mysqli->query($sql);
?>