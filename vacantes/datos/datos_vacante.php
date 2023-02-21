<?php
	require '../database/conexion.php';
	require '../database/datos_vacante.php';
?>
<!--===============================================================================================-->
	<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="../../img/logo/logo.ico"/>
		<meta charset="UTF-8">
		<title>PiviWeb</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<!--===============================================================================================-->
<!-- CSS de Datos Vacantes -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/vacantes.css">
<!--===============================================================================================-->
<!-- CSS de Barra de Navegacion -->
<link href="css/header_footer/barra_navegacion.css" rel="stylesheet">
<!--===============================================================================================-->
<!-- CSS de Footer -->
<link href="css/header_footer/Myfooter.css" rel="stylesheet">
<!--===============================================================================================-->
<!-- CSS Externo de foother -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--===============================================================================================-->
		</head>
		<body>
<!--===============================================================================================-->
<!-- Barra de Navegacion -->
  <header>
  <nav id='cssmenu'>
  <div class="logo"><a href="../vacantes_principal.php">PiviWeb</a></div>
  <div id="head-mobile"></div>
  <div class="button"></div>
  <ul class="pull-right">
  <li><a href='javascript:history.back(-1);'><b>Regresar</b></a></li>
  </ul>
  </nav>
  </header>
<!--===============================================================================================-->
<!-- Contenido de los Datos de la Vacante -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="single-post d-flex flex-row fondo-tarjeta">
						<div class="thumb col-lg-5">
							<img src="../images/PiviWeb_tarjeta.png" alt="">
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a><h4 style="color: #d4dae4";><?php echo $row['Titulos_Vacantes'] ?> </a></h4>
								</div>
							</div>
							<p style="color: #ffffff";><b>
								<?php echo $row['Carrera_Vacantes'] ?>
							</b></p>
							<h5 style="color: #d4dae4";><b>Institución o Empresa: </b><?php echo $row['Emp_Inst_Vacantes'] ?></h5>
							<p class="address" style="color: #d4dae4";><span class="lnr lnr-map" style="color: #ffffff";></span><b>  <?php echo $row['Delegacion_Vacantes'] ?>, <?php echo $row['Estado_Vacantes'] ?></b></p>
							<div class="titles">
								<a><h4 style="color: #ffffff";><span class="lnr lnr-database" style="color: #ffffff";></span> Ayuda económica de $2,000.00 pesos al mes.</a></h4>
							</div>
						</div>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="single-post job-details fondo-general">
						<h3 class="single-title" style="color: #ffffff";>Datos Generales de la Vacante<br></br></h3>
						<h4 style="color: #ffffff";>
							<b>Tipo de Vacante:  </b>   <?php echo $row['Seccion_Vacantes'] ?>
							<br></br>
						</h4>
						<h4 style="color: #ffffff";>
							<b>Cargo Disponible:  </b>   <?php echo $row['Cargo_Vacantes'] ?>
						</h4>
					</div>
					<div class="single-post job-details fondo-info">
						<h4 class="single-title" style="color: #ffffff";>Descripción de la Vacante</h4>
						<p style="color: #e2e1e8";>
							<?php echo $row['Descripcion_Vacantes'] ?>
						</p>
					</div>
					<div class="single-post job-experience fondo-info">
						<h4 class="single-title" style="color: #ffffff";>Conocimientos Requeridos</h4>
						<ul>
							<li>
								<span style="color: #e2e1e8";><b><?php echo $row['Conocimientos_Vacantes'] ?></b></span>
							</li>
						</ul>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
							<div class="single-post job-experience">
								<h4 class="single-title">Postularse a la Vacante</h4>
								<form action="../../archivos/curriculum_vitae.php" method="post" enctype="multipart/form-data" name="form">
<!--===============================================================================================-->
				<input type="hidden" id="titulo" name="titulo" value="<?php echo $row['Titulos_Vacantes'] ?>" />
<!--===============================================================================================-->
									<div class="row">
<!--===============================================================================================-->
								<div class="col-md-12">
										<div class="form-group">
												<label style="color:#ffffff";><b>Ingresa tu Correo Electrónico</b></label>
												<input  type="email" class="form-control"  placeholder="Ejemplo@dominio.com" id="Correo_Postulado" name="Correo_Postulado" value="" required>
										</div>
								</div>
<!--===============================================================================================-->
							</div>
								<button  name="boton" type="submit" id="boton" class="btn btn-warning btn-fill pull-right"><b>Postularse</b></button>
										<div class="clearfix"></div>
									</form>
							</div>
						</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h3 style="color:#ffffff";>Nuestras Vacantes<br></br></h3>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="../vacantes_bolsa.php" style="color:#ffffff";><p><b>Bolsa de Trabajo</b></p><span class="lnr lnr-users"></span></a></li>
									<li><a class="justify-content-between d-flex" href="../vacantes_proyectos.php" style="color:#ffffff";><p><b>Proyectos</b></p><span class="lnr lnr-users"></span></a></li>
									<li><a class="justify-content-between d-flex" href="../vacantes_SS-PP-RP-B.php" style="color:#ffffff";><p><b>SS-PP-RP-B</b></p><span class="lnr lnr-users"></span></a></li>
									<li><a class="justify-content-between d-flex" href="../vacantes.php" style="color:#ffffff";><p><b>Todas las Vacantes</b></p><span class="lnr lnr-users"></span></a></li>
								</ul>
							</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
							<div id="fb-root"></div>
							<script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2"></script>
							<div class="single-slidebar">
								<h3 style="color:#ffffff";>Nuestras Redes Sociales<br></br></h3>
								<div class="fb-page" data-href="https://www.facebook.com/Centro-Nacional-de-Investigaci&#xf3;n-y-Desarrollo-de-Empresas-304541323058846/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Centro-Nacional-de-Investigaci&#xf3;n-y-Desarrollo-de-Empresas-304541323058846/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Centro-Nacional-de-Investigaci&#xf3;n-y-Desarrollo-de-Empresas-304541323058846/">Centro Nacional de Investigación y Desarrollo de Empresas</a></blockquote></div>
							</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
						</div>
					</div>
				</div>
			</section>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Footer -->
			<footer id="myFooter">
				<div class="container">
									<div class="row ">
										<div class="col-md-4 col-xl-5">
											<div class="pr-xl-4 logfoother"><a class="logfoother" href="#"><img class="brand-logo-light" src="../../img/logo/PiviWeb.png" alt="" width="140" height="37" srcset="../../img/logo/PiviWeb.png"><br></br></a>
												<dt ALIGN="justify">Obtenga ofertas y avisos importantes directamente en su bandeja de entrada de correo electrónico. ¡Nunca enviamos spam!<br></br></dt>
												<dd class="rights" ALIGN="center"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>. </span><span>Todos los derechos reservados.</span></dd>
											</div>
										</div>
										<div class="col-md-4">
											<dl class="contact-list">
												<dt ALIGN="center">Dirección:</dt>
												<dd ALIGN="justify">Av. Año de Juárez 308, Granjas San Antonio, 09070 Ciudad de México, CDMX</dd>
											</dl>
											<dl class="contact-list">
												<dt ALIGN="center">Correo Electrónico:</dt>
												<dd ALIGN="center"><a href="mailto:contacto@cenide.com.mx">contacto@cenide.com.mx</a></dd>
											</dl>
											<dl class="contact-list">
												<dt ALIGN="center">Teléfono:</dt>
												<dd ALIGN="center"><a href="tel:55127125">+52 5512 7125</a>
												</dd>
											</dl>
										</div>
										<div class="col-md-4 col-xl-3">
											<dt ALIGN="center"><b>Links</b></dt>

											<ul class="nav-list">
												<li ALIGN="center"><a href="../vacantes.php">Todas Nuestras Vacantes</a></li>
												<li ALIGN="center"><a href="../vacantes_SS-PP-RP-B.php">SS-PP-RP-B</a></li>
												<li ALIGN="center"><a href="../vacantes_bolsa.php">Bolsa de Trabajo</a></li>
												<li ALIGN="center"><a href="../vacantes_proyectos.php">Proyectos</a></li>
											</ul>
										</div>
									</div>
								</div>
<!--===============================================================================================-->
<!-- Google Maps -->
					<div class="container">
							<iframe id="map-container" frameborder="0" style="border:0"
									src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d470.5035542378204!2d-99.10573556344305!3d19.36792145883579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe74689b032f%3A0x3215f4d79192914!2sAsociaci%C3%B3n+de+Empresarios+de+Iztapalapa+%2CA.C!5e0!3m2!1ses-419!2smx!4v1550768494368" >
							</iframe>
					</div>
<!--===============================================================================================-->
<!-- Redes Sociales -->
					<div class="social-networks">
							<a href="https://twitter.com/CenideOficial" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/Cenide-531130270424151" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://www.linkedin.com/in/cenide-oficial/" class="google"><i class="fa fa-google-plus"></i></a>
					</div>
					<div class="footer-copyright">
							<dt><a>COPYRIGHTS © 2019 - Sitio creado y hospedado en servicios digitales online.</a></dt>
					</div>
			</footer>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "531130270424151", // Facebook page ID
            whatsapp: "52 1 5555127125", // WhatsApp number
            call_to_action: "Contáctanos", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!--===============================================================================================-->
<!-- JavaScript de datos de las Vacantes -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>


			<script type="text/javascript">
			function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files){

	$from = $senderName." <".$senderMail.">";
	$headers = "From: $from";

	// boundary
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	// headers for attachment
	$headers .= "nMIME-Version: 1.0n" . "Content-Type: multipart/mixed;n" . " boundary="{$mime_boundary}"";

	// multipart boundary
	$message = "--{$mime_boundary}n" . "Content-Type: text/html; charset="UTF-8"n" .
	"Content-Transfer-Encoding: 7bitnn" . $message . "nn";

	// preparing attachments
	if(count($files) > 0){
			for($i=0;$i<count($files);$i++){
					if(is_file($files[$i])){
							$message .= "--{$mime_boundary}n";
							$fp =    @fopen($files[$i],"rb");
							$data =  @fread($fp,filesize($files[$i]));
							@fclose($fp);
							$data = chunk_split(base64_encode($data));
							$message .= "Content-Type: application/octet-stream; name="".basename($files[$i]).""n" .
							"Content-Description: ".basename($files[$i])."n" .
							"Content-Disposition: attachment;n" . " filename="".basename($files[$i]).""; size=".filesize($files[$i]).";n" .
							"Content-Transfer-Encoding: base64nn" . $data . "nn";
					}
			}
	}

	$message .= "--{$mime_boundary}--";
	$returnpath = "-f" . $senderMail;

	//send email
	$mail = @mail($to, $subject, $message, $headers, $returnpath);

	//function return true, if email sent, otherwise return fasle
	if($mail){ return TRUE; } else { return FALSE; }

}

//email variables
$to = 'email@receptor.com';
$from = 'email@emisor.com';
$from_name = 'TuNombre';

//attachment files path array
$files = array('imagen.png','texto.docx');
$subject = 'Asunto';
$html_content = '<h1>Enviar correo con múltiples adjuntos</h1>
					<p><b>Total adjuntos : </b>'.count($files).' adjuntos</p>';

//call multi_attach_mail() function and pass the required arguments
$send_email = multi_attach_mail($to,$subject,$html_content,$from,$from_name,$files);

//print message after email sent
echo $send_email?"<h1> Mensaje enviado</h1>":"<h1> Mensaje no enviado</h1>";
			</script>
<!--===============================================================================================-->
<!--===============================================================================================-->
		</body>
<!--===============================================================================================-->
<!-- JavaScript de Barrra de Navegacion -->
		<script src="js/BarraNav.js"></script>
<!--===============================================================================================-->
	</html>