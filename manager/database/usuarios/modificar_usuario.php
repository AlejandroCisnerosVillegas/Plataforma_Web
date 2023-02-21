<?php
require '../../database/conexion.php';

$id = $_POST['id'];
$Nombre_DUsuario = $_POST['Nombre_DUsuario'];
$Correo_DUsuario = $_POST['Correo_DUsuario'];
$Edad_DUsuario = $_POST['Edad_DUsuario'];
$Nivel_DUsuario = $_POST['Nivel_DUsuario'];
$Carrera_DUsuario = $_POST['Carrera_DUsuario'];
$Conocimiento_DUsuario = $_POST['Conocimiento_DUsuario'];
$Telefono_DUsuario = $_POST['Telefono_DUsuario'];
$Ciudad_DUsuario = $_POST['Ciudad_DUsuario'];
$Minicipio_DUsuario = $_POST['Minicipio_DUsuario'];
$TVacante_DUsuario = $_POST['TVacante_DUsuario'];

$sql = "UPDATE datos_usuario SET Nombre_DUsuario='$Nombre_DUsuario', Correo_DUsuario='$Correo_DUsuario', Edad_DUsuario='$Edad_DUsuario', Nivel_DUsuario='$Nivel_DUsuario', Carrera_DUsuario='$Carrera_DUsuario', Conocimiento_DUsuario='$Conocimiento_DUsuario', Telefono_DUsuario='$Telefono_DUsuario', Ciudad_DUsuario='$Ciudad_DUsuario', Minicipio_DUsuario='$Minicipio_DUsuario', TVacante_DUsuario='$TVacante_DUsuario' WHERE Correo_DUsuario='$id'";
$resultado = $mysqli->query($sql);
?>