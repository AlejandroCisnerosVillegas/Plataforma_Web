<?php
//Conexion con la base de datos.
$conexion= new mysqli('Ip_Address', 'User', 'Pasword');

if($conexion->connect_errno){
     echo "Fallo al conectar a MySQL:(". $conexion->connect_errno.")";
}
else{

$conexion->select_db("DataBase_Name");

$Correo_Usuario = $_POST['Correo_Usuario'];
$Contrasena_Usuario = $_POST['Contrasena_Usuario'];
$Contrasena_Usuario_Conf = $_POST['Contrasena_Usuario_Conf'];

$consultasa="SELECT Correo_Usuario FROM usuarios WHERE Correo_Usuario='$Correo_Usuario'";

if($query= $conexion->query($consultasa)){
$row=$query->fetch_array();
$nr =$query->num_rows;
//Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
if($nr <= 0){
  if($Contrasena_Usuario == $Contrasena_Usuario_Conf){

  }
  else{
  header ("Location:registro_denegado.html");
  }
}
else{
header ("Location:registro_negado.html");
}
}
else{
header ("Location:registro_denegado.html");
}
}
 ?>
