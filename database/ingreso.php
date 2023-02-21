<?php
 //Conexion con la base de datos.
 $conexion= new mysqli('Ip_Address', 'User', 'Pasword');

 if($conexion->connect_errno){
      echo "Fallo al conectar a MySQL:(". $conexion->connect_errno.")";
 }
 else{

 $conexion->select_db("DataBase_Name");

 //declaramos como variables a los campos de texto del formulario.
 $nombre=$_POST["txtuser"];
 $password=$_POST["txtpass"];

 //Consulta del usuario y el password
 $consulta="SELECT Correo_Usuario,Contrasena_Usuario,tipo FROM usuarios
 WHERE Correo_Usuario='$nombre' and Contrasena_Usuario='$password' and tipo='Admin'";

 $consultasa="SELECT Correo_Usuario,Contrasena_Usuario,tipo FROM usuarios
 WHERE Correo_Usuario='$nombre' and Contrasena_Usuario='$password' and tipo='Usuario'";

 if($query= $conexion->query($consulta)){
 $row=$query->fetch_array();
 $nr =$query->num_rows;
 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
 if($nr == 1){
   header ("Location:../manager/institutions/");
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) {
   if($query= $conexion->query($consultasa)){
   $row=$query->fetch_array();
   $nr =$query->num_rows;
   if($nr == 1){
    header ("Location:../vacantes/vacantes_principal.php");
   }
   else if($nr <= 0) {
 header ("Location:../pagweb/login/logeo_denegado.html");
   }
 }
 }
 }
 else{
 echo $conexion->error;
 }
}
?>
