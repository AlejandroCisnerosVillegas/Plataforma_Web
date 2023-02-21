<?php
require 'conexion.php';

$sql = "SELECT * FROM institucion ORDER BY Nombre_Institucion ASC";
$resultado = $mysqli->query($sql);
?>