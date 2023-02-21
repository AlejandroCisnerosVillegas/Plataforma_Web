<?php

//obtener el id de la imagen
$id=  filter_input(INPUT_GET, 'id');

if($id==''){
  die ("No tenemos el id");
}

//conectar a mysql---------
$conn = mysqli_connect('IP_Address', 'User', 'Pasword', 'DataBase_Name') or die("Error al conectar al servidor");
//---------------------------

$sql="SELECT Archivo_UPRechazados, Tipo_UPRechazados, Nombre_UPRechazados FROM postulados_rechazados WHERE IDUPAceptados = $id";

//ejecutar la sentencia sql
$resultado = mysqli_query($conn, $sql) or die("Error: no se pudo hacer la consulta.");

while($row = mysqli_fetch_array($resultado)){
  $archivo= $row[0]; //obtener el archivo
  $tipo=$row[1]; //obtener el tipo de archivo
  $nombre=$row[2]; //obtener el nombre del archivo
}

mysql_free_result($conn);
mysql_close($conn);

//header para tranformar la salida en el tipo de archivo que hemos guardado
header("Content-type: $tipo");
header('Content-Disposition: attachment; filename="'.$nombre.'"');

//imprimir el archivo
echo $archivo;
?>
