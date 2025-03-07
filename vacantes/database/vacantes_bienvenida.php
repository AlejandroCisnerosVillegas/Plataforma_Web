<?php
require 'conexion.php';

$Correo_DUsuario = $_POST['Correo_DUsuario'];
$Nombre_DUsuario = $_POST['Nombre_DUsuario'];
$Edad_DUsuario = $_POST['Edad_DUsuario'];
$Nivel_DUsuario = $_POST['Nivel_DUsuario'];
$Carrera_DUsuario = $_POST['Carrera_DUsuario'];
$Conocimiento_DUsuario = $_POST['Conocimiento_DUsuario'];
$Telefono_DUsuario = $_POST['Telefono_DUsuario'];
$Ciudad_DUsuario = $_POST['Ciudad_DUsuario'];
$Minicipio_DUsuario = $_POST['Minicipio_DUsuario'];
$TVacante_DUsuario = $_POST['TVacante_DUsuario'];

$sql = "INSERT INTO datos_usuario (Correo_DUsuario, Nombre_DUsuario, Edad_DUsuario, Nivel_DUsuario, Carrera_DUsuario, Conocimiento_DUsuario, Telefono_DUsuario, Ciudad_DUsuario, Minicipio_DUsuario, TVacante_DUsuario) VALUES ('$Correo_DUsuario', '$Nombre_DUsuario', '$Edad_DUsuario', '$Nivel_DUsuario', '$Carrera_DUsuario', '$Conocimiento_DUsuario', '$Telefono_DUsuario', '$Ciudad_DUsuario', '$Minicipio_DUsuario', '$TVacante_DUsuario')";
$resultado = $mysqli->query($sql);
?>