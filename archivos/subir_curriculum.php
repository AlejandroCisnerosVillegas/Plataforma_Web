<?php
require '../database/conexion.php';

$archivo_titulo = $_POST['titulo'];
$archivo_Correo = $_POST['Correo_Postulado'];

$consulta="SELECT titulo,correo FROM archivos
 WHERE titulo='$archivo_titulo' and correo='$archivo_Correo'";

$tablausuario="SELECT * FROM datos_usuario WHERE Correo_DUsuario='$archivo_Correo'";
$resultado = $mysqli->query($tablausuario);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

$Nombre_DUsuario = $row['Nombre_DUsuario'];
$Edad_DUsuario = $row['Edad_DUsuario'];
$Telefono_DUsuario = $row['Telefono_DUsuario'];
$Nivel_DUsuario = $row['Nivel_DUsuario'];
$Carrera_DUsuario = $row['Carrera_DUsuario'];
$Conocimiento_DUsuario = $row['Conocimiento_DUsuario'];
$Ciudad_DUsuario = $row['Ciudad_DUsuario'];
$Minicipio_DUsuario = $row['Minicipio_DUsuario'];
$TVacante_DUsuario = $row['TVacante_DUsuario'];

$tabladelavacante="SELECT * FROM vacante WHERE Titulos_Vacantes='$archivo_titulo'";
$resultadoso = $mysqli->query($tabladelavacante);
$rowes = $resultadoso->fetch_array(MYSQLI_ASSOC);

$Emp_Inst_Vacantes = $rowes['Emp_Inst_Vacantes'];
$Estado_Vacantes = $rowes['Estado_Vacantes'];
$Delegacion_Vacantes = $rowes['Delegacion_Vacantes'];
$Cargo_Vacantes = $rowes['Cargo_Vacantes'];
$Descripcion_Vacantes = $rowes['Descripcion_Vacantes'];
$Carrera_Vacantes = $rowes['Carrera_Vacantes'];
$Conocimientos_Vacantes = $rowes['Conocimientos_Vacantes'];

$uploaddir = "curriculum_vitae/";

 $uploadfile = $uploaddir . $Nombre_DUsuario . "_(" . $archivo_titulo . ")_" . basename($_FILES['archivo']['name']);
 $error = $_FILES['archivo']['error'];
 $subido = false;

if($query= $mysqli->query($consulta)){
 $row=$query->fetch_array();
 $nr =$query->num_rows;

 if($nr <= 0){
     if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK) {
   $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile);
  }
    if($subido) {

$sql = "INSERT INTO archivos (direccion, titulo, correo, Nombre_DUsuario, Edad_DUsuario, Telefono_DUsuario, Nivel_DUsuario, Carrera_DUsuario, 
Conocimiento_DUsuario, Ciudad_DUsuario, Minicipio_DUsuario, TVacante_DUsuario, Emp_Inst_Vacantes, Estado_Vacantes, Delegacion_Vacantes, Cargo_Vacantes, 
Descripcion_Vacantes, Carrera_Vacantes, Conocimientos_Vacantes) 
VALUES ('$uploadfile', '$archivo_titulo', '$archivo_Correo', '$Nombre_DUsuario', '$Edad_DUsuario', '$Telefono_DUsuario', '$Nivel_DUsuario', 
'$Carrera_DUsuario', '$Conocimiento_DUsuario', '$Ciudad_DUsuario', '$Minicipio_DUsuario', '$TVacante_DUsuario', '$Emp_Inst_Vacantes', 
'$Estado_Vacantes', '$Delegacion_Vacantes', '$Cargo_Vacantes', '$Descripcion_Vacantes', '$Carrera_Vacantes', '$Conocimientos_Vacantes')";
$resultado = $mysqli->query($sql);

echo'<script type="text/javascript">
            alert("Tu postulado se ha completado con exito, en breve nos pondremos en contacto contigo para darle seguimiento a tu solicitud. Si tienes alguna duda, comunicate con nosotros en alguna de nuestras redes sociales.");
            window.location.href="javascript:history.go(-2);";
            </script>';


   } else {
    echo "Se ha producido un error: ".$error;
  }



 }else{
     echo'<script type="text/javascript">
            alert("Lo sentimos, pero este usuario ya se postulo a esta vacante. Si Tienes alguna duda, por favor ponte en contacto con nosotros.");
            window.location.href="javascript:history.go(-2);";
            </script>';
 }

 }
 else{
     echo'<script type="text/javascript">
            alert("Disculpa, ocurrio un problema, en breve lo solucionaremos");
            window.location.href="javascript:history.go(-2);";
            </script>';
 }
?>