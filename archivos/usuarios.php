<?php
require '../database/conexion.php';

$archivo_titulo = $_POST['titulo'];
$archivo_Correo = $_POST['Correo_Postulado'];

$consulta="SELECT Correo_Usuario FROM usuarios WHERE Correo_Usuario='$archivo_Correo'";

 if($query= $mysqli->query($consulta)){
 $row=$query->fetch_array();
 $nr =$query->num_rows;

 if($nr <= 0){
   echo'<script type="text/javascript">
             alert("Disculpa, pero este correo no esta registrado");
             window.location.href="javascript:history.back(-1);";
             </script>';
 }
}
?>