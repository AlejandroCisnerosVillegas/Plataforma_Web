<?php
require 'conexion.php';

$sql = "SELECT * FROM usuario_administrador ORDER BY IDUsuario DESC";
$resultado = $mysqli->query($sql);
?>