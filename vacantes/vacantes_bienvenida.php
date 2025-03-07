<?php
	require 'database/vacantes_bienvenidas.php';
?>
<?php
	require 'database/vacantes_bienvenida.php';
?>
<?php
	require 'database/vacantes_principal.php';
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
<!-- CSS de Vacantes Principal -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
<!--===============================================================================================-->
<!-- CSS Particulares de Vacantes Principal -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
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
<!-- Buscador -->
    <div class="site-blocks-cover" style="background-image: url(images/buscador.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-12">
            <h1 class="mb-2 w-75" style="color:#ffffff";><span class="font-weight-bold">Buscamos la Vacante</span> Ideal para Ti.</h1>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Vacantes</a>
                </li>
              </ul>
              <div class="tab-content pivibuscar p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form method="POST" action="vacantes_busqueda.php" autocomplete="on" name="formulario1">
                    <div class="row">
                      <div class="col-md-6 col-lg-5 mb-3 mb-lg-0">
                        <div class="select-wrap">
													<input type="text" class="form-control"  placeholder="Nombre de la Carrera" id="Carrera_Vacantes" name="Carrera_Vacantes" value="" required>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="Estado_Vacantes" id="Estado_Vacantes" class="form-control">
														<option value="Aguascalientes">Aguascalientes</option>
														 <option value="Baja_California">Baja California</option>
														 <option value="Baja_California_Sur">Baja California Sur</option>
														 <option value="Campeche">Campeche</option>
														 <option value="Chiapas">Chiapas</option>
														 <option value="Chihuahua">Chihuahua</option>
														 <option value="Ciudad_de_Mexico">Ciudad de México</option>
														 <option value="Coahuila">Coahuila</option>
														 <option value="Colima">Colima</option>
														 <option value="Durango">Durango</option>
														 <option value="Estado_de_Mexico">Estado de México</option>
														 <option value="Guanajuato">Guanajuato</option>
														 <option value="Guerrero">Guerrero</option>
														 <option value="Hidalgo">Hidalgo</option>
														 <option value="Jalisco">Jalisco</option>
														 <option value="Michoacan">Michoacán</option>
														 <option value="Morelos">Morelos</option>
														 <option value="Nayarit">Nayarit</option>
														 <option value="Nuevo_Leon">Nuevo León</option>
														 <option value="Oaxaca">Oaxaca</option>
														 <option value="Puebla">Puebla</option>
														 <option value="Queretaro">Querétaro</option>
														 <option value="Quintana_Roo">Quintana Roo</option>
														 <option value="San_Luis_Potosi">San Luis Potosí</option>
														 <option value="Sinaloa">Sinaloa</option>
														 <option value="Sonora">Sonora</option>
														 <option value="Tabasco">Tabasco</option>
														 <option value="Tamaulipas">Tamaulipas</option>
														 <option value="Tlaxcala">Tlaxcala</option>
														 <option value="Veracruz">Veracruz</option>
														 <option value="Yucatan">Yucatán</option>
														 <option value="Zacatecas">Zacatecas</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Buscar">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Tipo de Vacante -->
    <div class="site-section parallax">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-11" data-aos="fade" >
            <h2 style="color:#ffffff";>¿Qué tipo de Vacante estas <strong>Buscando</strong> ?</h2>
          </div>
        </div>
        <div class="row hosting">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">
         <a href="vacantes_SS-PP-RP-B.php">
          <div class="unit-3 h-100 vacpri02">
            <div class="d-flex align-items-center mb-3 unit-3-heading">
              <div class="unit-3-icon-wrap mr-4">
                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
              </div>
              <FONT SIZE=5>SS-PP-RP-B</font>
            </div>
            <div class="unit-3-body">
						<p align="center"><FONT SIZE=4><b>¿Qué es el SS-PP-RP-B?</b></font></p>
              <p align="center"><b>Es el apartado donde se postulan las vacantes de Servicio Social, Prácticas Profesionales, Residencias Profesionales y Becarios.</b></p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">
          <a href="vacantes_proyectos.php">
          <div class="unit-3 h-100 vacpri05">
            <div class="d-flex align-items-center mb-3 unit-3-heading">
              <div class="unit-3-icon-wrap mr-4">
                <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                  <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
              </div>
              <FONT SIZE=5>Proyectos</font>
            </div>
            <div class="unit-3-body">
							<p align="center"><FONT SIZE=4><b>¿Qué son los Proyectos?</b></font></p>
              <p align="center"><b>Es una actividad que permite al usuario formar parte de las grandes organizaciones del mañana.</b></p>
            </div>
          </div>
         </a>
       </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">
           <a href="vacantes_bolsa.php">
            <div class="unit-3 h-100 vacpri06">
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <FONT SIZE=5>Bolsa de Trabajo</font>
              </div>
              <div class="unit-3-body">
								<p align="center"><FONT SIZE=4><b>¿Qué es la Bolsa de Trabajo?</b></font></p>
                <p align="center"><b>Es una actividad que permite al usuario formar parte de un gran número de empresas u organizaciones.</b></p>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!-- Las Vacantes mas Resientes -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Las Vacantes más Resientes</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="vacantes.php" class="btn btn-primary py-3 btn-block">Vacantes Disponibles</a>
          </div>
        </div>
<!--===============================================================================================-->
    <div class="row table-responsive">
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
  </div>
</div>
<!--===============================================================================================-->
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
  </div>
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
<!-- JavaScript Vacantes Principal -->
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
<!--===============================================================================================-->
<!-- JavaScript de Buscador -->
  <script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
<!--===============================================================================================-->
<!-- JavaScript de Vacante Principal (Extra) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>
  <script src="js/main.js"></script>
  </body>
<!--===============================================================================================-->
<!--===============================================================================================-->
</html>