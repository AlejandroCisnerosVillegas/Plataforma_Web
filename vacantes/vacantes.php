<?php
require 'database/vacantes.php';
?>
<!--===============================================================================================-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PiviWeb</title>
    <link rel="icon" type="image/png" href="../img/logo/logo.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--===============================================================================================-->
<!-- CSS de Fuentes de Vacantes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
<!--===============================================================================================-->
<!-- CSS de Vacantes -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
<!--===============================================================================================-->
<!-- CSS Particulares de Vacantes -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/v_vacantes.css">
<!--===============================================================================================-->
  </head>
  <body>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Menu de Mobiles -->
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Menu de Vacantes Principal -->
    <header class="site-navbar py-1 pivibarranav" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0" style="color:#ffffff";><a href="vacantes_principal.php" class="h2 mb-0">Pivi<strong>Web</strong></a></h1>
          </div>
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="vacantes_principal.php"><b>Inicio</b></a></li>
                <li class="has-children active">
                  <a href="vacantes.php"><b>Vacantes</b></a>
                  <ul class="dropdown">
                    <li><a href="vacantes_bolsa.php"><b>Bolsa de Trabajo</b></a></li>
                    <li><a href="vacantes_proyectos.php"><b>Proyectos</b></a></li>
										<li><a href="vacantes_SS-PP-RP-B.php"><b>SS-PP-RP-B</b></a></li>
                  </ul>
                </li>
                <li class="active"><a href="#"><b>Eventos</b></a></li>
                <li><a href="../index.html"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">-</span>Salir</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Vacante General -->
    <div class="unit-5 overlay" style="background-image: url('images/vacantes_general.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Nuestras Vacantes</h2>
        <p class="mb-0 unit-6"><a href="vacantes_principal.php">Inicio</a> <span class="sep">></span> <span>Vacantes</span></p>
      </div>
    </div>
<!--===============================================================================================-->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <span class="text-gray-900" style="color:#21202b";>PiviWeb</span>
            <h2 class="font-weight-bold text-black">Todas Nuestras Vacantes - General</h2>
          </div>
        </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
    <div class="row table-responsive">
<!--===============================================================================================-->
<!-- Barra de Busqueda -->
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Buscar Vacante ..." name="search" id="search">
							</div>
						</div>
<!--===============================================================================================-->
      <table class="container" id="employee_table">
        <thead>
<!--===============================================================================================-->
          <tr>
          </tr>
<!--===============================================================================================-->
        </thead>
        <tbody>
          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
<!--===============================================================================================-->
              <td>
                <div class="container">
                <div class="row" data-aos="fade">
                 <div class="col-md-12">
                   <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                      <div class="mb-4 mb-md-0 mr-5">
                        <label for="Name" style="color:#af1111";><b><?php echo $row['Tiempo_Vacantes'] ?></b></label>
                       <div class="job-post-item-header d-flex align-items-center">
                         <h2 class="mr-3 text-black h4"><?php echo $row['Titulos_Vacantes'] ?></h2>
                         <div class="badge-wrap">
                          <span class="<?php echo $row['Color_Vacantes'] ?> text-white badge py-2 px-4"><?php echo $row['Seccion_Vacantes'] ?></span>
                         </div>
                       </div>
                       <div class="job-post-item-body d-block d-md-flex">
                         <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="datos/datos_vacante.php?id=<?php echo $row['IDVacantes'] ?>"><?php echo $row['Emp_Inst_Vacantes'] ?></a></div>
                         <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $row['Delegacion_Vacantes'] ?>, <?php echo $row['Estado_Vacantes'] ?></span></div>
                       </div>
                      </div>
                      <div class="ml-auto">
                        <a href="datos/datos_vacante.php?id=<?php echo $row['IDVacantes'] ?>" class="btn btn-primary py-2">Aplicar</a>
                      </div>
                   </div>
                 </div>
                </div>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
      </div>
    </div>
<!--===============================================================================================-->
<!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row pt-4 mt-5 text-center">
          <div class="col-md-12">
            <p style="color:#ffffff";><b>COPYRIGHTS © 2019 - Sitio creado y hospedado en servicios digitales online.</b></p>
          </div>
        </div>
      </div>
    </footer>
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
<!-- JavaScript Vacantes -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  </body>
<!-- ======================================================================================================== -->
<!-- JavaScript del Buscador de la Tabla -->
	<script>
			 $(document).ready(function(){
						$('#search').keyup(function(){
								 search_table($(this).val());
						});
						function search_table(value){
								 $('#employee_table tr').each(function(){
											var found = 'false';
											$(this).each(function(){
													 if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
													 {
																found = 'true';
													 }
											});
											if(found == 'true')
											{
													 $(this).show();
											}
											else
											{
													 $(this).hide();
											}
								 });
						}
			 });
	</script>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
</html>