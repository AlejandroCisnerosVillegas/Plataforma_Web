<?php
require 'usuarios.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <!-- ======================================================================================================== -->
<!-- Titulo del Sitio Web -->
	<title>PiviWeb</title>
<!-- ======================================================================================================== -->
<!-- Formato de la Pagina Web -->
	<link rel="icon" type="image/png" href="../administrador/assets/img/logo.ico">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
   body {
background: #f5f5f5;
font-family: Arial, Verdana, sans-serif;

  background-image: url(../vacantes/images/fondo.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #66999;
    min-height: 100vh;
    font: normal 16px sans-serif;
}
#container {
background: #090911;
border: 1px solid #cecece;
max-width: 1170px;
margin: 20px auto 0 auto;
padding: 20px;
text-align: center;
border-radius: 15px;
}
h1 {
color: #ffffff;
}
a {
color: #f26e0f;
text-decoration: none;
}
a:hover {
text-decoration: underline;
}
form {
max-width: 500px;
margin: 0 auto;
}
form fieldset {
background: #090911;
}
form legend {
color: red;
font-size: 20px;
font-weight: bold;
text-transform: uppercase;
}
form ul {
padding: 0px;
}
form ul li {
list-style-type: none;
text-align: left;
margin-top: 10px;
}
form ul li:last-child {
text-align: center;
}
form ul li input[type="text"],form ul li input[type="email"], form ul li textarea {
border: 1px solid #cecece;,
border-radius: 3px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-o-border-radius: 3px;
padding: 7px;
width: 96%;
}
input[type=”file”]#nuestroinput {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 
 label[for=" nuestroinput"] {
 font-size: 14px;
 font-weight: 600;
 color: #db2c2c;
 background-color: #db2c2c;
 display: inline-block;
 transition: all .5s;
 cursor: pointer;
 padding: 15px 40px !important;
 text-transform: uppercase;
 width: fit-content;
 text-align: center;
 }
form ul li input[type="submit"] {
background: red;
border: none;
color: #fff;
cursor: pointer;
font-size: 16px;
font-weight: bold;
padding: 10px;
text-transform: uppercase;
width: 50%;
}
.msn-ok, .msn-ko {
color: #fff;
padding: 10px;
text-align: center;
width: 65%;
margin: 20px auto;
}
.msn-ok {
background: #22AF22;
}
.msn-ko {
background: #CC2F2F;
}
 </style>
</head>
<body>
 <div id="container">
 <h1>¡Envíanos tu Curriculum Vitae! - <a href="../vacantes/vacantes_principal.php">PiviWeb</a></h1>
 <br></br>
 <form action="subir_curriculum.php" method="post" enctype="multipart/form-data" name="form">
      <label style="color:#ffffff"; for="archivo"><h5><p><b>Archivo Adjunto</b> - (Solo se acepta formato PDF)</p></h5></label>
      <input type="hidden" id="titulo" name="titulo" value="<?php echo $archivo_titulo;?>" id="Correo_Usuario" />
      <input type="hidden" id="Correo_Postulado" name="Correo_Postulado" value="<?php echo $archivo_Correo;?>" id="Correo_Usuario" />
      <input accept="application/pdf" style="color:#ffffff"; name="archivo" type="file" id="archivo" />
      <br></br>
      <input class="btn btn-warning" name="boton" type="submit" id="boton" value="Enviar Curriculum Vitae" />
     </form>
 </div>

 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script>
$(document).ready(function(){
 $('form').submit(function(){
 if($('input[type="text"]').val() == '' || $('input[type="email"]').val() == '' || $('input[type="file"]').val() == '' || $('textarea').val() == ''){
 alert('Rellena todos los campos');
 return false;
 }
 });
 });
</script>

</body>
</html>