<?php
require '../../database/registro_selectivo.php';
?>
<?php
require '../../database/registro.php';
?>
<!--===============================================================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
<!--===============================================================================================-->
	<!-- Titulo del Sitio Web -->
	<title>PiviWeb</title>
<!--===============================================================================================-->
	<!-- Formato de la Pagina Web -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../img/logo/logo.ico"/>
<!--===============================================================================================-->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../../cenide/bootstrap/css/bootstrapregistro.css">
<!--===============================================================================================-->
	<!-- CSS Estilos Locales -->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<!-- Pagina de Registro CSS -->
	<link rel="stylesheet" type="text/css" href="../../css/registro1.css">
	<link rel="stylesheet" type="text/css" href="../../css/registro2.css">
<!--===============================================================================================-->
<!-- CSS de Barra de Navegacion -->
<link href="../../css/header_footer/barraNav.css" rel="stylesheet">
<!--===============================================================================================-->
<!-- CSS de Footer principal -->
<link href="../../css/header_footer/Myfooter.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--===============================================================================================-->
  <!-- CSS de Footer secundario-->
  <link href="../../css/header_footer/footer.css" rel="stylesheet">
<!--===============================================================================================-->
<script>
function comprobarClave(){
				alert("??Lo sentimos!\nPero no puede salir hasta que se complete el proceso de registro.")
}
</script>
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
<!--===============================================================================================-->
	<!-- Barra de Navegacion -->
	<header>
	<nav id='cssmenu'>
	<div class="logo" onClick="comprobarClave()"><h4>PiviWeb</h4></div>
	<div id="head-mobile"></div>
	<div class="button"></div>
	<ul>
	<li><a onClick="comprobarClave()">Inicio</a></li>
	<li><a onClick="comprobarClave()">Nuestra Empresa</a></li>
	<li><a onClick="comprobarClave()">Programas y Actividades</a></li>
	<li><a onClick="comprobarClave()">Vacantes</a></li>
	</ul>
	</nav>
	</header>
<!--===============================================================================================-->
	<!-- Formulario de Registro de Usuario -->
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('../../img/wallpapers/registro_02.jpg');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
<!--===============================================================================================-->
<!--===============================================================================================-->
			<form class="login100-form validate-form" name="login" method="post" action="../../vacantes/vacantes_bienvenida.php" id="formlg" autocomplete="on">
<!--===============================================================================================-->
<!--===============================================================================================-->
					<span class="login100-form-title p-b-59">Registrate en PiviWeb</span>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input100 form-group validate-input" data-validate = "Ingresa nombre completo.">
						<span class="label-input100"><b>Nombre Completo</b></span>
						<input type="text" class="input100"  placeholder="Nombre ..........." id="Nombre_DUsuario" name="Nombre_DUsuario" value="" required>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<input type="hidden" name="Contrasena_Usuario" value="<?php echo $Contrasena_Usuario;?>" id="Contrasena_Usuario" />

	<input type="hidden" name="Correo_Usuario" value="<?php echo $Correo_Usuario;?>" id="Correo_Usuario" />

	<input type="hidden" name="Correo_DUsuario" value="<?php echo $Correo_Usuario;?>" id="Correo_DUsuario" />
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1002 form-group validate-input" data-validate = "Selecciona una ciudad o estado.">
						<span class="label-input100"><b>Ciudad o Estado</b></span>
						<select class="custom-select my-1 mr-sm-2" id="primary" name="Ciudad_DUsuario">
							<option value="Aguascalientes">Aguascalientes</option>
							 <option value="Baja_California">Baja California</option>
							 <option value="Baja_California_Sur">Baja California Sur</option>
							 <option value="Campeche">Campeche</option>
							 <option value="Chiapas">Chiapas</option>
							 <option value="Chihuahua">Chihuahua</option>
							 <option value="Ciudad_de_Mexico">Ciudad de M??xico</option>
							 <option value="Coahuila">Coahuila</option>
							 <option value="Colima">Colima</option>
							 <option value="Durango">Durango</option>
							 <option value="Estado_de_Mexico">Estado de M??xico</option>
							 <option value="Guanajuato">Guanajuato</option>
							 <option value="Guerrero">Guerrero</option>
							 <option value="Hidalgo">Hidalgo</option>
							 <option value="Jalisco">Jalisco</option>
							 <option value="Michoacan">Michoac??n</option>
							 <option value="Morelos">Morelos</option>
							 <option value="Nayarit">Nayarit</option>
							 <option value="Nuevo_Leon">Nuevo Le??n</option>
							 <option value="Oaxaca">Oaxaca</option>
							 <option value="Puebla">Puebla</option>
							 <option value="Queretaro">Quer??taro</option>
							 <option value="Quintana_Roo">Quintana Roo</option>
							 <option value="San_Luis_Potosi">San Luis Potos??</option>
							 <option value="Sinaloa">Sinaloa</option>
							 <option value="Sonora">Sonora</option>
							 <option value="Tabasco">Tabasco</option>
							 <option value="Tamaulipas">Tamaulipas</option>
							 <option value="Tlaxcala">Tlaxcala</option>
							 <option value="Veracruz">Veracruz</option>
							 <option value="Yucatan">Yucat??n</option>
							 <option value="Zacatecas">Zacatecas</option>
						 </select>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1002 form-group validate-input" data-validate = "Selecciona un municipios, delegaci??n o alcald??a.">
						<span class="label-input100"><b>Municipios, Delegaci??n o Alcald??a</b></span>
						<select id="secondary" class="custom-select my-1 mr-sm-2" name="Minicipio_DUsuario">
						</select>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1003 form-group validate-input" data-validate = "Selecciona una Edad.">
						<span class="label-input100"><b>Edad</b></span>
						<select id="Edad_DUsuario" class="custom-select my-1 mr-sm-2" name="Edad_DUsuario">
							<option value="0">Seleccione Edad</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
						</select>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input100 form-group validate-input" data-validate = "Ingresa Numero telefonico.">
						<span class="label-input100"><b>Tel??fono Celular</b></span>
						<input type="text" class="input100"  placeholder="55 - 1234 5678" id="Telefono_DUsuario" name="Telefono_DUsuario" value="" required>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1002 form-group validate-input" data-validate = "Seleccione un nivel de estudios.">
						<span class="label-input100"><b>Nivel de Estudios</b></span>
						<select id="Nivel_DUsuario" class="custom-select my-1 mr-sm-2" name="Nivel_DUsuario">
							<option value="No Asignado">Seleccione Nivel de Estudios</option>
							<option value="Media Superior">Media Superior</option>
							<option value="Superior">Superior</option>
						</select>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input100 form-group validate-input" data-validate = "Ingresa carrera.">
						<span class="label-input100"><b>Carrera</b></span>
						<input type="text" class="input100"  placeholder="Carrera ..........." id="Carrera_DUsuario" name="Carrera_DUsuario" value="" required>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1002 form-group validate-input" data-validate = "Ingresa algun conocimiento adquirido.">
						<span class="label-input100"><b>Conocimientos Adquiridos</b></span>
						<textarea rows="7" class="form-control"  placeholder="Lista de Conocimientos Adquiridos" id="Conocimiento_DUsuario" name="Conocimiento_DUsuario" required value="Ingresa Algun Conocimiento Adquirido."></textarea>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="wrap-input1000 form-group validate-input" data-validate = "Selecciona una Edad."  id="color">
						<span class="label-input100"><b>??Qu?? tipo de vacante estas buscando?<br></br></b></span>
						<input checked type="radio" name="TVacante_DUsuario" value="Servicio Social"><span class="label-input100" style="color:#ffffff";>   Servicio Social</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Pr??cticas Profesionales"><span class="label-input100" style="color:#ffffff";>   Pr??cticas Profesionales</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Residencias Profesionales"><span class="label-input100" style="color:#ffffff";>   Residencias Profesionales</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Becarios"><span class="label-input100" style="color:#ffffff";>   Becarios</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Proyectos"><span class="label-input100" style="color:#ffffff";>   Proyectos</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Bolsa de Trabajo"><span class="label-input100" style="color:#ffffff";>   Bolsa de Trabajo</span><br></br>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="Submit">Registrarse</button>
						</div>
					</div>
				</form>
<!--===============================================================================================-->
<!--===============================================================================================-->
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<!-- Footer -->
				<footer id="myFooter">
					<div class="container">
										<div class="row row-30">
											<div class="col-md-4 col-xl-5">
												<div class="pr-xl-4 logfoother"><a class="logfoother" onClick="comprobarClave()"><img class="brand-logo-light" src="../../img/logo/PiviWeb.png" alt="" width="140" height="37" srcset="../../img/logo/PiviWeb.png"><br></br></a>
													<dt ALIGN="justify">Obtenga ofertas y avisos importantes directamente en su bandeja de entrada de correo electr??nico. ??Nunca enviamos spam!<br></br></dt>
													<dd class="rights" ALIGN="center"><span>???? </span><span class="copyright-year">2019</span><span>??</span><span>.??</span><span>Todos los derechos reservados.</span></dd>
												</div>
											</div>
											<div class="col-md-4">
												<dl class="contact-list">
													<dt ALIGN="center">Direcci??n:</dt>
													<dd ALIGN="justify">Av. A??o de Ju??rez 308, Granjas San Antonio, 09070 Ciudad de M??xico, CDMX</dd>
												</dl>
												<dl class="contact-list">
													<dt ALIGN="center">Correo Electr??nico:</dt>
													<dd ALIGN="center"><a onClick="comprobarClave()">contacto@cenide.com.mx</a></dd>
												</dl>
												<dl class="contact-list">
													<dt ALIGN="center">Tel??fono:</dt>
													<dd ALIGN="center"><a onClick="comprobarClave()">+52 5512 7125</a>
													</dd>
												</dl>
											</div>
											<div class="col-md-4 col-xl-3">
												<h5 ALIGN="center">Links</h5>
												<ul class="nav-list">
													<li ALIGN="center"><a onClick="comprobarClave()">Inicio</a></li>
													<li ALIGN="center"><a onClick="comprobarClave()">Nuestra Empresa</a></li>
													<li ALIGN="center"><a onClick="comprobarClave()">Programas y Actividades</a></li>
													<li ALIGN="center"><a onClick="comprobarClave()">Vacantes</a></li>
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
								<a onClick="comprobarClave()" class="twitter"><i class="fa fa-twitter"></i></a>
								<a onClick="comprobarClave()" class="facebook"><i class="fa fa-facebook"></i></a>
								<a onClick="comprobarClave()" class="google"><i class="fa fa-google-plus"></i></a>
						</div>
				</footer>
<!--===============================================================================================-->
  <!-- Descripcion de alojamiento del sitio web -->
        <footer>
              <dt><a style="color:#ffffff";>COPYRIGHTS ?? 2019 - Sitio creado y hospedado en servicios digitales online.</a></dt>
        </footer>
<!--===============================================================================================-->
<!-- JavaScript -->
<!--===============================================================================================-->
	<!-- JavaScript de Barrra de Navegacion -->
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script  src="../../js/BarraNav.js"></script>
<!--===============================================================================================-->
	<script src="../../cenide/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../js/login.js"></script>
	<script src="../../js/municipios_alcaldia.js"></script>
<!--===============================================================================================-->
</body>
<!--===============================================================================================-->
<!--===============================================================================================-->
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
	var options = {
		Aguascalientes : ["Aguascalientes", "Asientos", "Calvillo", "Cos??o", "Jes??s Mar??a", "Pabell??n De Arteaga", "Rinc??n De Romos", "San Jos?? De Gracia", "Tepezal??", "El Llano", "San Francisco De Los Romo"],

		Baja_California : ["Ensenada", "Mexicali", "Tecate", "Tijuana", "Playas De Rosarito"],

		Baja_California_Sur : ["Comond??", "Muleg??", "La Paz", "Los Cabos", "Loreto"],

		Campeche : ["Calkin??", "Campeche", "Carmen", "Champot??n", "Hecelchak??n", "Hopelch??n", "Palizada", "Tenabo", "Esc??rcega", "Calakmul", "Candelaria"],

		Chiapas : ["Acacoyagua", "Acala", "Acapetahua", "Altamirano", "Amat??n", "Amatenango De La Frontera", "Amatenango Del Valle", "Angel Albino Corzo", "Arriaga", "Bejucal De Ocampo", "Bella Vista", "Berrioz??bal", "Bochil", "El Bosque", "Cacahoat??n", "Catazaj??", "Cintalapa", "Coapilla", "Comit??n De Dom??nguez", "La Concordia", "Copainal??", "Chalchihuit??n", "Chamula", "Chanal", "Chapultenango", "Chenalh??", "Chiapa De Corzo", "Chiapilla", "Chicoas??n", "Chicomuselo", "Chil??n", "Escuintla", "Francisco Le??n", "Frontera Comalapa", "Frontera Hidalgo", "La Grandeza", "Huehuet??n", "Huixt??n", "Huitiup??n", "Huixtla", "La Independencia", "Ixhuat??n", "Ixtacomit??n", "Ixtapa", "Ixtapangajoya", "Jiquipilas", "Jitotol", "Ju??rez", "Larr??inzar", "La Libertad", "Mapastepec", "Las Margaritas", "Mazapa De Madero", "Mazat??n", "Metapa", "Mitontic", "Motozintla", "Nicol??s Ru??z", "Ocosingo", "Ocotepec", "Ocozocoautla De Espinosa", "Ostuac??n", "Osumacinta", "Oxchuc", "Palenque", "Pantelh??", "Pantepec", "Pichucalco", "Pijijiapan", "El Porvenir", "Villa Comaltitl??n", "Pueblo Nuevo Solistahuac??n", "Ray??n", "Reforma", "Las Rosas", "Sabanilla", "Salto De Agua", "San Crist??bal De Las Casas", "San Fernando", "Siltepec", "Simojovel", "Sital??", "Socoltenango", "Solosuchiapa", "Soyal??", "Suchiapa", "Suchiate", "Sunuapa", "Tapachula", "Tapalapa", "Tapilula", "Tecpat??n", "Tenejapa", "Teopisca", "Tila", "Tonal??", "Totolapa", "La Trinitaria", "Tumbal??", "Tuxtla Guti??rrez", "Tuxtla Chico", "Tuzant??n", "Tzimol", "Uni??n Ju??rez", "Venustiano Carranza", "Villa Corzo", "Villaflores", "Yajal??n", "San Lucas", "inacant??n", "San Juan Cancuc", "Aldama", "Benem??rito De Las Am??ricas", "Maravilla Tenejapa", "Marqu??s De Comillas", "Montecristo De Guerrero", "San Andr??s Duraznal", "Santiago El Pinar"],

		Chihuahua : ["Ahumada", "Aldama", "Allende", "Aquiles Serd??n", "Ascensi??n", "Bach??niva", "Balleza", "Batopilas", "Bocoyna", "Buenaventura", "Camargo", "Carich??", "Casas Grandes", "Coronado", "Coyame Del Sotol", "La Cruz", "Cuauht??moc", "Cusihuiriachi", "Chihuahua", "Ch??nipas", "Delicias", "Dr. Belisario Dom??nguez", "Galeana", "Santa Isabel", "G??mez Far??as", "Gran Morelos", "Guachochi", "Guadalupe", "Guadalupe Y Calvo", "Guazapares", "Guerrero", "Hidalgo Del Parral", "Huejotit??n", "Ignacio Zaragoza", "Janos", "Jim??nez", "Ju??rez", "Julimes", "L??pez", "Madera", "Maguarichi", "Manuel Benavides", "Matach??", "Matamoros", "Meoqui", "Morelos", "Moris", "Namiquipa", "Nonoava", "Nuevo Casas Grandes", "Ocampo", "Ojinaga", "Praxedis G. Guerrero", "Riva Palacio", "Rosales", "Rosario", "San Francisco De Borja", "San Francisco De Conchos", "San Francisco Del Oro", "Santa B??rbara", "Satev??", "Saucillo", "Tem??sachic", "El Tule", "Urique", "Uruachi", "Valle De Zaragoza"],

		Ciudad_de_Mexico : ["Azcapotzalco", "Coyoac??n", "Cuajimalpa De Morelos", "Gustavo A. Madero", "Iztacalco", "Iztapalapa", "La Magdalena Contreras", "Milpa Alta", "??lvaro Obreg??n", "Tl??huac", "Tlalpan", "Xochimilco", "Benito Ju??rez", "Cuauht??moc", "Miguel Hidalgo", "Venustiano Carranza"],

		Coahuila : ["Abasolo", "Acu??a", "Allende", "Arteaga", "Candela", "Casta??os", "Cuatro Ci??negas", "Escobedo", "Francisco I. Madero", "Frontera", "General Cepeda", "Guerrero", "Hidalgo", "Jim??nez", "Ju??rez", "Lamadrid", "Matamoros", "Monclova", "Morelos", "M??zquiz", "Nadadores", "Nava", "Ocampo", "Parras", "Piedras Negras", "Progreso", "Ramos Arizpe", "Sabinas", "Sacramento", "Saltillo", "San Buenaventura", "San Juan De Sabinas", "San Pedro", "Sierra Mojada", "Torre??n", "Viesca", "Villa Uni??n", "Zaragoza"],

		Colima : ["Armer??a", "Colima", "Comala", "Coquimatl??n", "Cuauht??moc", "Ixtlahuac??n", "Manzanillo", "Minatitl??n", "Tecom??n", "Villa De ??lvarez", "Durango", "Canatl??n", "Canelas", "Coneto De Comonfort", "Cuencam??"],

		Durango : ["General Sim??n Bol??var", "G??mez Palacio", "Guadalupe Victoria", "Guanacev??", "Hidalgo", "Ind??", "Lerdo", "Mapim??", "Mezquital", "Nazas", "Nombre De Dios", "Ocampo", "El Oro", "Ot??ez", "P??nuco De Coronado", "Pe????n Blanco", "Poanas", "Pueblo Nuevo", "Rodeo", "San Bernardo", "San Dimas", "San Juan De Guadalupe", "San Juan Del R??o", "San Luis Del Cordero", "San Pedro Del Gallo", "Santa Clara", "Santiago Papasquiaro", "S??chil", "Tamazula", "Tepehuanes", "Tlahualilo", "Topia", "Vicente Guerrero", "Nuevo Ideal"],

		Estado_de_Mexico : ["Acambay De Ru??z Casta??eda", "Acolman", "Aculco", "Almoloya De Alquisiras", "Almoloya De Ju??rez", "Almoloya Del R??o", "Amanalco", "Amatepec", "Amecameca", "Apaxco", "Atenco", "Atizap??n", "Atizap??n De Zaragoza", "Atlacomulco", "Atlautla", "Axapusco", "Ayapango", "Calimaya", "Capulhuac", "Coacalco De Berrioz??bal", "Coatepec Harinas", "Cocotitl??n", "Coyotepec", "Cuautitl??n", "Chalco", "Chapa De Mota", "Chapultepec", "Chiautla", "Chicoloapan", "Chiconcuac", "Chimalhuac??n", "Donato Guerra", "Ecatepec De Morelos", "Ecatzingo", "Huehuetoca", "Hueypoxtla", "Huixquilucan", "Isidro Fabela", "Ixtapaluca", "Ixtapan De La Sal", "Ixtapan Del Oro", "Ixtlahuaca", "Xalatlaco", "Jaltenco", "Jilotepec", "Jilotzingo", "Jiquipilco", "Jocotitl??n", "Joquicingo", "Juchitepec", "Lerma", "Malinalco", "Melchor Ocampo", "Metepec", "Mexicaltzingo", "Morelos", "Naucalpan De Ju??rez", "Nezahualc??yotl", "Nextlalpan", "Nicol??s Romero", "Nopaltepec", "Ocoyoacac", "Ocuilan", "El Oro", "Otumba", "Otzoloapan", "Otzolotepec", "Ozumba", "Papalotla", "La Paz", "Polotitl??n", "Ray??n", "San Antonio La Isla", "San Felipe Del Progreso", "San Mart??n De Las Pir??mides", "San Mateo Atenco", "San Sim??n De Guerrero", "Santo Tom??s", "Soyaniquilpan De Ju??rez", "Sultepec", "Tec??mac", "Tejupilco", "Temamatla", "Temascalapa", "Temascalcingo", "Temascaltepec", "Temoaya", "Tenancingo", "Tenango Del Aire", "Tenango Del Valle", "Teoloyucan", "Teotihuac??n", "Tepetlaoxtoc", "Tepetlixpa", "Tepotzotl??n", "Tequixquiac", "Texcaltitl??n", "Texcalyacac", "Texcoco", "Tezoyuca", "Tianguistenco", "Timilpan", "Tlalmanalco", "Tlalnepantla De Baz", "Tlatlaya", "Toluca", "Tonatico", "Tultepec", "Tultitl??n", "Valle De Bravo", "Villa De Allende", "Villa Del Carb??n", "Villa Guerrero", "Villa Victoria", "Xonacatl??n", "Zacazonapan", "Zacualpan", "Zinacantepec", "Zumpahuac??n", "Zumpango", "Cuautitl??n Izcalli", "Valle De Chalco Solidaridad", "Luvianos", "San Jos?? Del Rinc??n", "Tonanitla"],

		Guanajuato : ["Abasolo", "Ac??mbaro", "San Miguel De Allende", "Apaseo El Alto", "Apaseo El Grande", "Atarjea", "Celaya", "Manuel Doblado", "Comonfort", "Coroneo", "Cortazar", "Cuer??maro", "Doctor Mora", "Dolores Hidalgo Cuna De La Independencia Nacional", "Guanajuato", "Huan??maro", "Irapuato", "Jaral Del Progreso", "Jer??cuaro", "Le??n", "Morole??n", "Ocampo", "P??njamo", "Pueblo Nuevo", "Pur??sima Del Rinc??n", "Romita", "Salamanca", "Salvatierra", "San Diego De La Uni??n", "San Felipe", "San Francisco Del Rinc??n", "San Jos?? Iturbide", "Santa Catarina", "Santa Cruz De Juventino Rosas", "Santiago Maravat??o", "Silao De La Victoria", "Tarandacuao", "Tarimoro", "Tierra Blanca", "Uriangato", "Valle De Santiago", "Victoria", "Villagr??n", "Xich??", "Yuriria"],

		Guerrero : ["Acapulco De Ju??rez", "Ahuacuotzingo", "Ajuchitl??n Del Progreso", "Alcozauca De Guerrero", "Alpoyeca", "Apaxtla", "Arcelia", "Atenango Del R??o", "Atlamajalcingo Del Monte", "Atlixtac", "Atoyac De ??lvarez", "Ayutla De Los Libres", "Azoy??", "Benito Ju??rez", "Buenavista De Cu??llar", "Coahuayutla De Jos?? Mar??a Izazaga", "Cocula", "Copala", "Copalillo", "Copanatoyac", "Coyuca De Ben??tez", "Coyuca De Catal??n", "Cuajinicuilapa", "Cual??c", "Cuautepec", "Cuetzala Del Progreso", "Cutzamala De Pinz??n", "Chilapa De ??lvarez", "Chilpancingo De Los Bravo", "Florencio Villarreal", "General Canuto A. Neri", "General Heliodoro Castillo", "Huamuxtitl??n", "Huitzuco De Los Figueroa", "Iguala De La Independencia", "Igualapa", "Ixcateopan De Cuauht??moc", "Zihuatanejo De Azueta", "Juan R. Escudero", "Leonardo Bravo", "Malinaltepec", "M??rtir De Cuilapan", "Metlat??noc", "Mochitl??n", "Olinal??", "Ometepec", "Pedro Ascencio Alquisiras", "Petatl??n", "Pilcaya", "Pungarabato", "Quechultenango", "San Luis Acatl??n", "San Marcos", "San Miguel Totolapan", "Taxco De Alarc??n", "Tecoanapa", "T??cpan De Galeana", "Teloloapan", "Tepecoacuilco De Trujano", "Tetipac", "Tixtla De Guerrero", "Tlacoachistlahuaca", "Tlacoapa", "Tlalchapa", "Tlalixtaquilla De Maldonado", "Tlapa De Comonfort", "Tlapehuala", "La Uni??n De Isidoro Montes De Oca", "Xalpatl??huac", "Xochihuehuetl??n", "Xochistlahuaca", "Zapotitl??n Tablas", "Zir??ndaro", "Zitlala", "Eduardo Neri", "Acatepec", "Marquelia", "Cochoapa El Grande", "Jos?? Joaqu??n De Herrera", "Juchit??n", "Iliatenco"],

		Hidalgo : ["Acatl??n", "Acaxochitl??n", "Actopan", "Agua Blanca De Iturbide", "Ajacuba", "Alfajayucan", "Almoloya", "Apan", "El Arenal", "Atitalaquia", "Atlapexco", "Atotonilco El Grande", "Atotonilco De Tula", "Calnali", "Cardonal", "Cuautepec De Hinojosa", "Chapantongo", "Chapulhuac??n", "Chilcuautla", "Eloxochitl??n", "Emiliano Zapata", "Epazoyucan", "Francisco I. Madero", "Huasca De Ocampo", "Huautla", "Huazalingo", "Huehuetla", "Huejutla De Reyes", "Huichapan", "Ixmiquilpan", "Jacala De Ledezma", "Jaltoc??n", "Ju??rez Hidalgo", "Lolotla", "Metepec", "San Agust??n Metzquititl??n", "Metztitl??n", "Mineral Del Chico", "Mineral Del Monte", "La Misi??n", "Mixquiahuala De Ju??rez", "Molango De Escamilla", "Nicol??s Flores", "Nopala De Villagr??n", "Omitl??n De Ju??rez", "San Felipe Orizatl??n", "Pacula", "Pachuca De Soto", "Pisaflores", "Progreso De Obreg??n", "Mineral De La Reforma", "San Agust??n Tlaxiaca", "San Bartolo Tutotepec", "San Salvador", "Santiago De Anaya", "Santiago Tulantepec De Lugo Guerrero", "Singuilucan", "Tasquillo", "Tecozautla", "Tenango De Doria", "Tepeapulco", "Tepehuac??n De Guerrero", "Tepeji Del R??o De Ocampo", "Tepetitl??n", "Tetepango", "Villa De Tezontepec", "Tezontepec De Aldama", "Tianguistengo", "Tizayuca", "Tlahuelilpan", "Tlahuiltepa", "Tlanalapa", "Tlanchinol", "Tlaxcoapan", "Tolcayuca", "Tula De Allende", "Tulancingo De Bravo", "Xochiatipan", "Xochicoatl??n", "Yahualica", "Zacualtip??n De ??ngeles", "Zapotl??n De Ju??rez", "Zempoala", "Zimap??n"],

		Jalisco : ["Acatic", "Acatl??n De Ju??rez", "Ahualulco De Mercado", "Amacueca", "Amatit??n", "Ameca", "San Juanito De Escobedo", "Arandas", "El Arenal", "Atemajac De Brizuela", "Atengo", "Atenguillo", "Atotonilco El Alto", "Atoyac", "Autl??n De Navarro", "Ayotl??n", "Ayutla", "La Barca", "Bola??os", "Cabo Corrientes", "Casimiro Castillo", "Cihuatl??n", "Zapotl??n El Grande", "Cocula", "Colotl??n", "Concepci??n De Buenos Aires", "Cuautitl??n De Garc??a Barrag??n", "Cuautla", "Cuqu??o", "Chapala", "Chimaltit??n", "Chiquilistl??n", "Degollado", "Ejutla", "Encarnaci??n De D??az", "Etzatl??n", "El Grullo", "Guachinango", "Guadalajara", "Hostotipaquillo", "Huej??car", "Huejuquilla El Alto", "La Huerta", "Ixtlahuac??n De Los Membrillos", "Ixtlahuac??n Del R??o", "Jalostotitl??n", "Jamay", "Jes??s Mar??a", "Jilotl??n De Los Dolores", "Jocotepec", "Juanacatl??n", "Juchitl??n", "Lagos De Moreno", "El Lim??n", "Magdalena", "Santa Mar??a Del Oro", "La Manzanilla De La Paz", "Mascota", "Mazamitla", "Mexticac??n", "Mezquitic", "Mixtl??n", "Ocotl??n", "Ojuelos De Jalisco", "Pihuamo", "Poncitl??n", "Puerto Vallarta", "Villa Purificaci??n", "Quitupan", "El Salto", "San Crist??bal De La Barranca", "San Diego De Alejandr??a", "San Juan De Los Lagos", "San Juli??n", "San Marcos", "San Mart??n De Bola??os", "San Mart??n Hidalgo", "San Miguel El Alto", "G??mez Far??as", "San Sebasti??n Del Oeste", "Santa Mar??a De Los ??ngeles", "Sayula", "Tala", "Talpa De Allende", "Tamazula De Gordiano", "Tapalpa", "Tecalitl??n", "Tecolotl??n", "Techaluta De Montenegro", "Tenamaxtl??n", "Teocaltiche", "Teocuitatl??n De Corona", "Tepatitl??n De Morelos", "Tequila", "Teuchitl??n", "Tizap??n El Alto", "Tlajomulco De Z????iga", "San Pedro Tlaquepaque", "Tolim??n", "Tomatl??n", "Tonal??", "Tonaya", "Tonila", "Totatiche", "Tototl??n", "Tuxcacuesco", "Tuxcueca", "Tuxpan", "Uni??n De San Antonio", "Uni??n De Tula", "Valle De Guadalupe", "Valle De Ju??rez", "San Gabriel", "Villa Corona", "Villa Guerrero", "Villa Hidalgo", "Ca??adas De Obreg??n", "Yahualica De Gonz??lez Gallo", "Zacoalco De Torres", "Zapopan", "Zapotiltic", "Zapotitl??n De Vadillo", "Zapotl??n Del Rey", "Zapotlanejo", "San Ignacio Cerro Gordo"],

		Michoacan : ["Acuitzio", "Aguililla", "??lvaro Obreg??n", "Angamacutiro", "Angangueo", "Apatzing??n", "Aporo", "Aquila", "Ario", "Arteaga", "Brise??as", "Buenavista", "Car??cuaro", "Coahuayana", "Coalcom??n De V??zquez Pallares", "Coeneo", "Contepec", "Cop??ndaro", "Cotija", "Cuitzeo", "Charapan", "Charo", "Chavinda", "Cher??n", "Chilchota", "Chinicuila", "Chuc??ndiro", "Churintzio", "Churumuco", "Ecuandureo", "Epitacio Huerta", "Erongar??cuaro", "Gabriel Zamora", "Hidalgo", "La Huacana", "Huandacareo", "Huaniqueo", "Huetamo", "Huiramba", "Indaparapeo", "Irimbo", "Ixtl??n", "Jacona", "Jim??nez", "Jiquilpan", "Ju??rez", "Jungapeo", "Lagunillas", "Madero", "Maravat??o", "Marcos Castellanos", "L??zaro C??rdenas", "Morelia", "Morelos", "M??gica", "Nahuatzen", "Nocup??taro", "Nuevo Parangaricutiro", "Nuevo Urecho", "Numar??n", "Ocampo", "Pajacuar??n", "Panind??cuaro", "Par??cuaro", "Paracho", "P??tzcuaro", "Penjamillo", "Perib??n", "La Piedad", "Pur??pero", "Puru??ndiro", "Quer??ndaro", "Quiroga", "Cojumatl??n De R??gules", "Los Reyes", "Sahuayo", "San Lucas", "Santa Ana Maya", "Salvador Escalante", "Senguio", "Susupuato", "Tac??mbaro", "Tanc??taro", "Tangamandapio", "Tanganc??cuaro", "Tanhuato", "Taretan", "Tar??mbaro", "Tepalcatepec", "Tingambato", "Ting??ind??n", "Tiquicheo De Nicol??s Romero", "Tlalpujahua", "Tlazazalca", "Tocumbo", "Tumbiscat??o", "Turicato", "Tuxpan", "Tuzantla", "Tzintzuntzan", "Tzitzio", "Uruapan", "Venustiano Carranza", "Villamar", "Vista Hermosa", "Yur??cuaro", "Zacapu", "Zamora", "Zin??paro", "Zinap??cuaro", "Ziracuaretiro", "Zit??cuaro", "Jos?? Sixto Verduzco"],

		Morelos : ["Amacuzac", "Atlatlahucan", "Axochiapan", "Ayala", "Coatl??n Del R??o", "Cuautla", "Cuernavaca", "Emiliano Zapata", "Huitzilac", "Jantetelco", "Jiutepec", "Jojutla", "Jonacatepec De Leandro Valle", "Mazatepec", "Miacatl??n", "Ocuituco", "Puente De Ixtla", "Temixco", "Tepalcingo", "Tepoztl??n", "Tetecala", "Tetela Del Volc??n", "Tlalnepantla", "Tlaltizap??n De Zapata", "Tlaquiltenango", "Tlayacapan", "Totolapan", "Xochitepec", "Yautepec", "Yecapixtla", "Zacatepec", "Zacualpan De Amilpas", "Temoac"],

		Nayarit : ["Acaponeta", "Ahuacatl??n", "Amatl??n De Ca??as", "Compostela", "Huajicori", "Ixtl??n Del R??o", "Jala", "Xalisco", "Del Nayar", "Rosamorada", "Ru??z", "San Blas", "San Pedro Lagunillas", "Santa Mar??a Del Oro", "Santiago Ixcuintla", "Tecuala", "Tepic", "Tuxpan", "La Yesca", "Bah??a De Banderas"],

		Nuevo_Leon : ["Abasolo", "Agualeguas", "Los Aldamas", "Allende", "An??huac", "Apodaca", "Aramberri", "Bustamante", "Cadereyta Jim??nez", "El Carmen", "Cerralvo", "Ci??nega De Flores", "China", "Doctor Arroyo", "Doctor Coss", "Doctor Gonz??lez", "Galeana", "Garc??a", "San Pedro Garza Garc??a", "General Bravo", "General Escobedo", "General Ter??n", "General Trevi??o", "General Zaragoza", "General Zuazua", "Guadalupe", "Los Herreras", "Higueras", "Hualahuises", "Iturbide", "Ju??rez", "Lampazos De Naranjo", "Linares", "Mar??n", "Melchor Ocampo", "Mier Y Noriega", "Mina", "Montemorelos", "Monterrey", "Par??s", "Pesquer??a", "Los Ramones", "Rayones", "Sabinas Hidalgo", "Salinas Victoria", "San Nicol??s De Los Garza", "Hidalgo", "Santa Catarina", "Santiago", "Vallecillo", "Villaldama"],

		Oaxaca : ["Abejones", "Acatl??n De P??rez Figueroa", "Asunci??n Cacalotepec", "Asunci??n Cuyotepeji", "Asunci??n Ixtaltepec", "Asunci??n Nochixtl??n", "Asunci??n Ocotl??n", "Asunci??n Tlacolulita", "Ayotzintepec", "El Barrio De La Soledad", "Calihual??", "Candelaria Loxicha", "Ci??nega De Zimatl??n", "Ciudad Ixtepec", "Coatecas Altas", "Coicoy??n De Las Flores", "La Compa????a", "Concepci??n Buenavista", "Concepci??n P??palo", "Constancia Del Rosario", "Cosolapa", "Cosoltepec", "Cuil??pam De Guerrero", "Cuyamecalco Villa De Zaragoza", "Chahuites", "Chalcatongo De Hidalgo", "Chiquihuitl??n De Benito Ju??rez", "Heroica Ciudad De Ejutla De Crespo", "Eloxochitl??n De Flores Mag??n", "El Espinal", "Tamazul??pam Del Esp??ritu Santo", "Fresnillo De Trujano", "Guadalupe Etla", "Guadalupe De Ram??rez", "Guelatao De Ju??rez", "Guevea De Humboldt", "Mesones Hidalgo", "Villa Hidalgo", "Heroica Ciudad De Huajuapan De Le??n", "Huautepec", "Huautla De Jim??nez", "Ixtl??n De Ju??rez", "Heroica Ciudad De Juchit??n De Zaragoza", "Loma Bonita", "Magdalena Apasco", "Magdalena Jaltepec", "Santa Magdalena Jicotl??n", "Magdalena Mixtepec", "Magdalena Ocotl??n", "Magdalena Pe??asco", "Magdalena Teitipac", "Magdalena Tequisistl??n", "Magdalena Tlacotepec", "Magdalena Zahuatl??n", "Mariscala De Ju??rez", "M??rtires De Tacubaya", "Mat??as Romero Avenda??o", "Mazatl??n Villa De Flores", "Miahuatl??n De Porfirio D??az", "Mixistl??n De La Reforma", "Monjas", "Natividad", "Nazareno Etla", "Nejapa De Madero", "Ixpantepec Nieves", "Santiago Niltepec", "Oaxaca De Ju??rez", "Ocotl??n De Morelos", "La Pe", "Pinotepa De Don Luis", "Pluma Hidalgo", "San Jos?? Del Progreso", "Putla Villa De Guerrero", "Santa Catarina Quioquitani", "Reforma De Pineda", "La Reforma", "Reyes Etla", "Rojas De Cuauht??moc", "Salina Cruz", "San Agust??n Amatengo", "San Agust??n Atenango", "San Agust??n Chayuco", "San Agust??n De Las Juntas", "San Agust??n Etla", "San Agust??n Loxicha", "San Agust??n Tlacotepec", "San Agust??n Yatareni", "San Andr??s Cabecera Nueva", "San Andr??s Dinicuiti", "San Andr??s Huaxpaltepec", "San Andr??s Huay??pam", "San Andr??s Ixtlahuaca", "San Andr??s Lagunas", "San Andr??s Nuxi??o", "San Andr??s Paxtl??n", "San Andr??s Sinaxtla", "San Andr??s Solaga", "San Andr??s Teotil??lpam", "San Andr??s Tepetlapa", "San Andr??s Ya??", "San Andr??s Zabache", "San Andr??s Zautla", "San Antonino Castillo Velasco", "San Antonino El Alto", "San Antonino Monte Verde", "San Antonio Acutla", "San Antonio De La Cal", "San Antonio Huitepec", "San Antonio Nanahuat??pam", "San Antonio Sinicahua", "San Antonio Tepetlapa", "San Baltazar Chichic??pam", "San Baltazar Loxicha", "San Baltazar Yatzachi El Bajo", "San Bartolo Coyotepec", "San Bartolom?? Ayautla", "San Bartolom?? Loxicha", "San Bartolom?? Quialana", "San Bartolom?? Yucua??e", "San Bartolom?? Zoogocho", "San Bartolo Soyaltepec", "San Bartolo Yautepec", "San Bernardo Mixtepec", "San Blas Atempa", "San Carlos Yautepec", "San Crist??bal Amatl??n", "San Crist??bal Amoltepec", "San Crist??bal Lachirioag", "San Crist??bal Suchixtlahuaca", "San Dionisio Del Mar", "San Dionisio Ocotepec", "San Dionisio Ocotl??n", "San Esteban Atatlahuca", "San Felipe Jalapa De D??az", "San Felipe Tejal??pam", "San Felipe Usila", "San Francisco Cahuacu??", "San Francisco Cajonos", "San Francisco Chapulapa", "San Francisco Chind??a", "San Francisco Del Mar", "San Francisco Huehuetl??n", "San Francisco Ixhuat??n", "San Francisco Jaltepetongo", "San Francisco Lachigol??", "San Francisco Logueche", "San Francisco Nuxa??o", "San Francisco Ozolotepec", "San Francisco Sola", "San Francisco Telixtlahuaca", "San Francisco Teopan", "San Francisco Tlapancingo", "San Gabriel Mixtepec", "San Ildefonso Amatl??n", "San Ildefonso Sola", "San Ildefonso Villa Alta", "San Jacinto Amilpas", "San Jacinto Tlacotepec", "San Jer??nimo Coatl??n", "San Jer??nimo Silacayoapilla", "San Jer??nimo Sosola", "San Jer??nimo Taviche", "San Jer??nimo Tec??atl", "San Jorge Nuchita", "San Jos?? Ayuquila", "San Jos?? Chiltepec", "San Jos?? Del Pe??asco", "San Jos?? Estancia Grande", "San Jos?? Independencia", "San Jos?? Lachiguiri", "San Jos?? Tenango", "San Juan Atepec", "??nimas Trujano", "San Juan Bautista Atatlahuca", "San Juan Bautista Coixtlahuaca", "San Juan Bautista Cuicatl??n", "San Juan Bautista Guelache", "San Juan Bautista Jayacatl??n", "San Juan Bautista Lo De Soto", "San Juan Bautista Suchitepec", "San Juan Bautista Tlacoatzintepec", "San Juan Bautista Tlachichilco", "San Juan BautistaTuxtepec", "San Juan Cacahuatepec", "San Juan Cieneguilla", "San Juan Coatz??spam", "San Juan Colorado", "San Juan Comaltepec", "San Juan Cotzoc??n", "San Juan Chicomez??chil", "San Juan Chilateca", "San Juan Del Estado", "San Juan Del R??o", "San Juan Diuxi", "San Juan Evangelista Analco", "San Juan Guelav??a", "San Juan Guichicovi", "San Juan Ihualtepec", "San Juan Juquila Mixes", "San Juan Juquila Vijanos", "San Juan Lachao", "San Juan Lachigalla", "San Juan Lajarcia", "San Juan Lalana", "San Juan De Los Cu??s", "San Juan Mazatl??n", "San Juan Mixtepec", "San Juan Mixtepec", "San Juan ??um??", "San Juan Ozolotepec", "San Juan Petlapa", "San Juan Quiahije", "San Juan Quiotepec", "San Juan Sayultepec", "San Juan Taba??", "San Juan Tamazola", "San Juan Teita", "San Juan Teitipac", "San Juan Tepeuxila", "San Juan Teposcolula", "San Juan Yae??", "San Juan Yatzona", "San Juan Yucuita", "San Lorenzo", "San Lorenzo Albarradas", "San Lorenzo Cacaotepec", "San Lorenzo Cuaunecuiltitla", "San Lorenzo Texmel??can", "San Lorenzo Victoria", "San Lucas Camotl??n", "San Lucas Ojitl??n", "San Lucas Quiavin??", "San Lucas Zoqui??pam", "San Luis Amatl??n", "San Marcial Ozolotepec", "San Marcos Arteaga", "San Mart??n De Los Cansecos", "San Mart??n Huamel??lpam", "San Mart??n Itunyoso", "San Mart??n Lachil??", "San Mart??n Peras", "San Mart??n Tilcajete", "San Mart??n Toxpalan", "San Mart??n Zacatepec", "San Mateo Cajonos", "Capul??lpam De M??ndez", "San Mateo Del Mar", "San Mateo Yoloxochitl??n", "San Mateo Etlatongo", "San Mateo Nej??pam", "San Mateo Pe??asco", "San Mateo Pi??as", "San Mateo R??o Hondo", "San Mateo Sindihui", "San Mateo Tlapiltepec", "San Melchor Betaza", "San Miguel Achiutla", "San Miguel Ahuehuetitl??n", "San Miguel Alo??pam", "San Miguel Amatitl??n", "San Miguel Amatl??n", "San Miguel Coatl??n", "San Miguel Chicahua", "San Miguel Chimalapa", "San Miguel Del Puerto", "San Miguel Del R??o", "San Miguel Ejutla", "San Miguel El Grande", "San Miguel Huautla", "San Miguel Mixtepec", "San Miguel Panixtlahuaca", "San Miguel Peras", "San Miguel Piedras", "San Miguel Quetzaltepec", "San Miguel Santa Flor", "Villa Sola De Vega", "San Miguel Soyaltepec", "San Miguel Suchixtepec", "Villa Talea De Castro", "San Miguel Tecomatl??n", "San Miguel Tenango", "San Miguel Tequixtepec", "San Miguel Tilqui??pam", "San Miguel Tlacamama", "San Miguel Tlacotepec", "San Miguel Tulancingo", "San Miguel Yotao", "San Nicol??s", "San Nicol??s Hidalgo", "San Pablo Coatl??n", "San Pablo Cuatro Venados", "San Pablo Etla", "San Pablo Huitzo", "San Pablo Huixtepec", "San Pablo Macuiltianguis", "San Pablo Tijaltepec", "San Pablo Villa De Mitla", "San Pablo Yaganiza", "San Pedro Amuzgos", "San Pedro Ap??stol", "San Pedro Atoyac", "San Pedro Cajonos", "San Pedro Coxcaltepec C??ntaros", "San Pedro Comitancillo", "San Pedro El Alto", "San Pedro Huamelula", "San Pedro Huilotepec", "San Pedro Ixcatl??n", "San Pedro Ixtlahuaca", "San Pedro Jaltepetongo", "San Pedro Jicay??n", "San Pedro Jocotipac", "San Pedro Juchatengo", "San Pedro M??rtir", "San Pedro M??rtir Quiechapa", "San Pedro M??rtir Yucuxaco", "San Pedro Mixtepec", "San Pedro Mixtepec", "San Pedro Molinos", "San Pedro Nopala", "San Pedro Ocopetatillo", "San Pedro Ocotepec", "San Pedro Pochutla", "San Pedro Quiatoni", "San Pedro Sochi??pam", "San Pedro Tapanatepec", "San Pedro Taviche", "San Pedro Teozacoalco", "San Pedro Teutila", "San Pedro Tida??", "San Pedro Topiltepec", "San Pedro Totol??pam", "Villa De Tututepec", "San Pedro Yaneri", "San Pedro Y??lox", "San Pedro Y San Pablo Ayutla", "Villa De Etla", "San Pedro Y San Pablo Teposcolula", "San Pedro Y San Pablo Tequixtepec", "San Pedro Yucunama", "San Raymundo Jalpan", "San Sebasti??n Abasolo","San Sebasti??n Coatl??n", "San Sebasti??n Ixcapa", "San Sebasti??n Nicananduta", "San Sebasti??n R??o Hondo", "San Sebasti??n Tecomaxtlahuaca", "San Sebasti??n Teitipac", "San Sebasti??n Tutla", "San Sim??n Almolongas", "San Sim??n Zahuatl??n", "Santa Ana", "Santa Ana Ateixtlahuaca", "Santa Ana Cuauht??moc", "Santa Ana Del Valle", "Santa Ana Tavela", "Santa Ana Tlapacoyan", "Santa Ana Yareni", "Santa Ana Zegache", "Santa Catalina Quier??", "Santa Catarina Cuixtla", "Santa Catarina Ixtepeji", "Santa Catarina Juquila", "Santa Catarina Lachatao", "Santa Catarina Loxicha", "Santa Catarina Mechoac??n", "Santa Catarina Minas", "Santa Catarina Quian??", "Santa Catarina Tayata", "Santa Catarina Ticu??", "Santa Catarina Yosonot??", "Santa Catarina Zapoquila", "Santa Cruz Acatepec", "Santa Cruz Amilpas", "Santa Cruz De Bravo", "Santa Cruz Itundujia", "Santa Cruz Mixtepec", "Santa Cruz Nundaco", "Santa Cruz Papalutla", "Santa Cruz Tacache De Mina", "Santa Cruz Tacahua", "Santa Cruz Tayata", "Santa Cruz Xitla", "Santa Cruz Xoxocotl??n", "Santa Cruz Zenzontepec", "Santa Gertrudis", "Santa In??s Del Monte", "Santa In??s Yatzeche", "Santa Luc??a Del Camino", "Santa Luc??a Miahuatl??n", "Santa Luc??a Monteverde", "Santa Luc??a Ocotl??n", "Santa Mar??a Alotepec", "Santa Mar??a Apazco", "Santa Mar??a La Asunci??n", "Heroica Ciudad De Tlaxiaco", "Ayoquezco De Aldama", "Santa Mar??a Atzompa", "Santa Mar??a Camotl??n", "Santa Mar??a Colotepec", "Santa Mar??a Cortijo", "Santa Mar??a Coyotepec", "Santa Mar??a Chacho??pam", "Villa De Chilapa De D??az", "Santa Mar??a Chilchotla", "Santa Mar??a Chimalapa", "Santa Mar??a Del Rosario", "Santa Mar??a Del Tule", "Santa Mar??a Ecatepec", "Santa Mar??a Guelac??", "Santa Mar??a Guienagati", "Santa Mar??a Huatulco", "Santa Mar??a Huazolotitl??n", "Santa Mar??a Ipalapa", "Santa Mar??a Ixcatl??n", "Santa Mar??a Jacatepec", "Santa Mar??a Jalapa Del Marqu??s", "Santa Mar??a Jaltianguis", "Santa Mar??a Lachix??o", "Santa Mar??a Mixtequilla", "Santa Mar??a Nativitas", "Santa Mar??a Nduayaco", "Santa Mar??a Ozolotepec", "Santa Mar??a P??palo", "Santa Mar??a Pe??oles", "Santa Mar??a Petapa", "Santa Mar??a Quiegolani", "Santa Mar??a Sola", "Santa Mar??a Tataltepec", "Santa Mar??a Tecomavaca", "Santa Mar??a Temaxcalapa", "Santa Mar??a Temaxcaltepec", "Santa Mar??a Teopoxco", "Santa Mar??a Tepantlali", "Santa Mar??a Texcatitl??n", "Santa Mar??a Tlahuitoltepec", "Santa Mar??a Tlalixtac", "Santa Mar??a Tonameca", "Santa Mar??a Totolapilla", "Santa Mar??a Xadani", "Santa Mar??a Yalina", "Santa Mar??a Yaves??a", "Santa Mar??a Yolotepec", "Santa Mar??a Yosoy??a", "Santa Mar??a Yucuhiti", "Santa Mar??a Zacatepec", "Santa Mar??a Zaniza", "Santa Mar??a Zoquitl??n", "Santiago Amoltepec", "Santiago Apoala", "Santiago Ap??stol", "Santiago Astata", "Santiago Atitl??n", "Santiago Ayuquililla", "Santiago Cacaloxtepec", "Santiago Camotl??n", "Santiago Comaltepec", "Santiago Chazumba", "Santiago Cho??pam", "Santiago Del R??o", "Santiago Huajolotitl??n", "Santiago Huauclilla", "Santiago Ihuitl??n Plumas", "Santiago Ixcuintepec", "Santiago Ixtayutla", "Santiago Jamiltepec", "Santiago Jocotepec", "Santiago Juxtlahuaca", "Santiago Lachiguiri", "Santiago Lalopa", "Santiago Laollaga", "Santiago Laxopa", "Santiago Llano Grande", "Santiago Matatl??n", "Santiago Miltepec", "Santiago Minas", "Santiago Nacaltepec", "Santiago Nejapilla", "Santiago Nundiche", "Santiago Nuyo??", "Santiago Pinotepa Nacional", "Santiago Suchilquitongo", "Santiago Tamazola", "Santiago Tapextla", "Villa Tej??pam De La Uni??n", "Santiago Tenango", "Santiago Tepetlapa", "Santiago Tetepec", "Santiago Texcalcingo", "Santiago Textitl??n", "Santiago Tilantongo", "Santiago Tillo", "Santiago Tlazoyaltepec", "Santiago Xanica", "Santiago Xiacu??", "Santiago Yaitepec", "Santiago Yaveo", "Santiago Yolom??catl", "Santiago Yosond??a", "Santiago Yucuyachi", "Santiago Zacatepec", "Santiago Zoochila", "Nuevo Zoqui??pam", "Santo Domingo Ingenio", "Santo Domingo Albarradas", "Santo Domingo Armenta", "Santo Domingo Chihuit??n", "Santo Domingo De Morelos", "Santo Domingo Ixcatl??n", "Santo Domingo Nuxa??", "Santo Domingo Ozolotepec", "Santo Domingo Petapa", "Santo Domingo Roayaga", "Santo Domingo Tehuantepec", "Santo Domingo Teojomulco", "Santo Domingo Tepuxtepec", "Santo Domingo Tlatay??pam", "Santo Domingo Tomaltepec", "Santo Domingo Tonal??", "Santo Domingo Tonaltepec", "Santo Domingo Xagac??a", "Santo Domingo Yanhuitl??n", "Santo Domingo Yodohino", "Santo Domingo Zanatepec", "Santos Reyes Nopala", "Santos Reyes P??palo", "Santos Reyes Tepejillo", "Santos Reyes Yucun??", "Santo Tom??s Jalieza", "Santo Tom??s Mazaltepec", "Santo Tom??s Ocotepec", "Santo Tom??s Tamazulapan", "San Vicente Coatl??n", "San Vicente Lachix??o", "San Vicente Nu????", "Silacayo??pam", "Sitio De Xitlapehua", "Soledad Etla", "Villa De Tamazul??pam Del Progreso", "Tanetze De Zaragoza", "Taniche", "Tataltepec De Vald??s", "Teococuilco De Marcos P??rez", "Teotitl??n De Flores Mag??n", "Teotitl??n Del Valle", "Teotongo", "Tepelmeme Villa De Morelos", "Villa Tezoatl??n De Segura Y Luna", "San Jer??nimo Tlacochahuaya", "Tlacolula De Matamoros", "Tlacotepec Plumas", "Tlalixtac De Cabrera", "Totontepec Villa De Morelos", "Trinidad Zaachila", "La Trinidad Vista Hermosa", "Uni??n Hidalgo", "Valerio Trujano", "San Juan Bautista Valle Nacional", "Villa D??az Ordaz", "Yaxe", "Magdalena Yodocono De Porfirio D??az", "Yogana", "Yutanduchi De Guerrero", "Villa De Zaachila", "San Mateo Yucutindoo", "Zapotitl??n Lagunas", "Zapotitl??n Palmas", "Santa In??s De Zaragoza", "Zimatl??n De ??lvarez"],

		Puebla : ["Acajete", "Acateno", "Acatl??n", "Acatzingo", "Acteopan", "Ahuacatl??n", "Ahuatl??n", "Ahuazotepec", "Ahuehuetitla", "Ajalpan", "Albino Zertuche", "Aljojuca", "Altepexi", "Amixtl??n", "Amozoc", "Aquixtla", "Atempan", "Atexcal", "Atlixco", "Atoyatempan", "Atzala", "Atzitzihuac??n", "Atzitzintla", "Axutla", "Ayotoxco De Guerrero", "Calpan", "Caltepec", "Camocuautla", "Caxhuacan", "Coatepec", "Coatzingo", "Cohetzala", "Cohuecan", "Coronango", "Coxcatl??n", "Coyomeapan", "Coyotepec", "Cuapiaxtla De Madero", "Cuautempan", "Cuautinch??n", "Cuautlancingo", "Cuayuca De Andrade", "Cuetzalan Del Progreso", "Cuyoaco", "Chalchicomula De Sesma", "Chapulco", "Chiautla", "Chiautzingo", "Chiconcuautla", "Chichiquila", "Chietla", "Chigmecatitl??n", "Chignahuapan", "Chignautla", "Chila", "Chila De La Sal", "Honey", "Chilchotla", "Chinantla", "Domingo Arenas", "Eloxochitl??n", "Epatl??n", "Esperanza", "Francisco Z. Mena", "General Felipe ??ngeles", "Guadalupe", "Guadalupe Victoria", "Hermenegildo Galeana", "Huaquechula", "Huatlatlauca", "Huauchinango", "Huehuetla", "Huehuetl??n El Chico", "Huejotzingo", "Hueyapan", "Hueytamalco", "Hueytlalpan", "Huitzilan De Serd??n", "Huitziltepec", "Atlequizayan", "Ixcamilpa De Guerrero", "Ixcaquixtla", "Ixtacamaxtitl??n", "Ixtepec", "Iz??car De Matamoros", "Jalpan", "Jolalpan", "Jonotla", "Jopala", "Juan C. Bonilla", "Juan Galindo", "Juan N. M??ndez", "Lafragua", "Libres", "La Magdalena Tlatlauquitepec", "Mazapiltepec De Ju??rez", "Mixtla", "Molcaxac", "Ca??ada Morelos", "Naupan", "Nauzontla", "Nealtican", "Nicol??s Bravo", "Nopalucan", "Ocotepec", "Ocoyucan", "Olintla", "Oriental", "Pahuatl??n", "Palmar De Bravo", "Pantepec", "Petlalcingo", "Piaxtla", "Puebla", "Quecholac", "Quimixtl??n", "Rafael Lara Grajales", "Los Reyes De Ju??rez", "San Andr??s Cholula", "San Antonio Ca??ada", "San Diego La Mesa Tochimiltzingo", "San Felipe Teotlalcingo", "San Felipe Tepatl??n", "San Gabriel Chilac", "San Gregorio Atzompa", "San Jer??nimo Tecuanipan", "San Jer??nimo Xayacatl??n", "San Jos?? Chiapa", "San Jos?? Miahuatl??n", "San Juan Atenco", "San Juan Atzompa", "San Mart??n Texmelucan", "San Mart??n Totoltepec", "San Mat??as Tlalancaleca", "San Miguel Ixitl??n", "San Miguel Xoxtla", "San Nicol??s Buenos Aires", "San Nicol??s De Los Ranchos", "San Pablo Anicano", "San Pedro Cholula", "San Pedro Yeloixtlahuaca", "San Salvador El Seco", "San Salvador El Verde", "San Salvador Huixcolotla", "San Sebasti??n Tlacotepec", "Santa Catarina Tlaltempan", "Santa In??s Ahuatempan", "Santa Isabel Cholula", "Santiago Miahuatl??n", "Huehuetl??n El Grande", "Santo Tom??s Hueyotlipan", "Soltepec", "Tecali De Herrera", "Tecamachalco", "Tecomatl??n", "Tehuac??n", "Tehuitzingo", "Tenampulco", "Teopantl??n", "Teotlalco", "Tepanco De L??pez", "Tepango De Rodr??guez", "Tepatlaxco De Hidalgo", "Tepeaca", "Tepemaxalco", "Tepeojuma", "Tepetzintla", "Tepexco", "Tepexi De Rodr??guez", "Tepeyahualco", "Tepeyahualco De Cuauht??moc", "Tetela De Ocampo", "Teteles De Avila Castillo", "Teziutl??n", "Tianguismanalco", "Tilapa", "Tlacotepec De Benito Ju??rez", "Tlacuilotepec", "Tlachichuca", "Tlahuapan", "Tlaltenango", "Tlanepantla", "Tlaola", "Tlapacoya", "Tlapanal??", "Tlatlauquitepec", "Tlaxco", "Tochimilco", "Tochtepec", "Totoltepec De Guerrero", "Tulcingo", "Tuzamapan De Galeana", "Tzicatlacoyan", "Venustiano Carranza", "Vicente Guerrero", "Xayacatl??n De Bravo", "Xicotepec", "Xicotl??n", "Xiutetelco", "Xochiapulco", "Xochiltepec", "Xochitl??n De Vicente Su??rez", "Xochitl??n Todos Santos", "Yaon??huac", "Yehualtepec", "Zacapala", "Zacapoaxtla", "Zacatl??n", "Zapotitl??n", "Zapotitl??n De M??ndez", "Zaragoza", "Zautla", "Zihuateutla", "Zinacatepec", "Zongozotla", "Zoquiapan", "Zoquitl??n"],

		Queretaro : ["Amealco De Bonfil", "Pinal De Amoles", "Arroyo Seco", "Cadereyta De Montes", "Col??n", "Corregidora", "Ezequiel Montes", "Huimilpan", "Jalpan De Serra", "Landa De Matamoros", "El Marqu??s", "Pedro Escobedo", "Pe??amiller", "Quer??taro", "San Joaqu??n", "San Juan Del R??o", "Tequisquiapan", "Tolim??n"],

		Quintana_Roo : ["Cozumel", "Felipe Carrillo Puerto", "Isla Mujeres", "Oth??n P. Blanco", "Benito Ju??rez", "Jos?? Mar??a Morelos", "L??zaro C??rdenas", "Solidaridad", "Tulum", "Bacalar", "Puerto Morelos", "San Luis Potos??", "Ahualulco", "Alaquines", "Aquism??n", "Armadillo De Los Infante", "C??rdenas", "Catorce", "Cedral", "Cerritos", "Cerro De San Pedro", "Ciudad Del Ma??z", "Ciudad Fern??ndez", "Tancanhuitz", "Ciudad Valles", "Coxcatl??n", "Charcas", "Ebano", "Guadalc??zar", "Huehuetl??n", "Lagunillas", "Matehuala", "Mexquitic De Carmona", "Moctezuma", "Ray??n", "Rioverde", "Salinas", "San Antonio", "San Ciro De Acosta"],

		San_Luis_Potosi : ["San Mart??n Chalchicuautla", "San Nicol??s Tolentino", "Santa Catarina", "Santa Mar??a Del R??o", "Santo Domingo", "San Vicente Tancuayalab", "Soledad De Graciano S??nchez", "Tamasopo", "Tamazunchale", "Tampac??n", "Tampamol??n Corona", "Tamu??n", "Tanlaj??s", "Tanqui??n De Escobedo", "Tierra Nueva", "Vanegas", "Venado", "Villa De Arriaga", "Villa De Guadalupe", "Villa De La Paz", "Villa De Ramos", "Villa De Reyes", "Villa Hidalgo", "Villa Ju??rez", "Axtla De Terrazas", "Xilitla", "Zaragoza", "Villa De Arista", "Matlapa", "El Naranjo"],

		Sinaloa : ["Ahome", "Angostura", "Badiraguato", "Concordia", "Cosal??", "Culiac??n", "Choix", "Elota", "Escuinapa", "El Fuerte", "Guasave", "Mazatl??n", "Mocorito", "Rosario", "Salvador Alvarado", "San Ignacio", "Sinaloa", "Navolato"],

		Sonora : ["Aconchi", "Agua Prieta", "Alamos", "Altar", "Arivechi", "Arizpe", "Atil", "Bacad??huachi", "Bacanora", "Bacerac", "Bacoachi", "B??cum", "Ban??michi", "Bavi??cora", "Bavispe", "Benjam??n Hill", "Caborca", "Cajeme", "Cananea", "Carb??", "La Colorada", "Cucurpe", "Cumpas", "Divisaderos", "Empalme", "Etchojoa", "Fronteras", "Granados", "Guaymas", "Hermosillo", "Huachinera", "Hu??sabas", "Huatabampo", "Hu??pac", "Imuris", "Magdalena", "Mazat??n", "Moctezuma", "Naco", "N??cori Chico", "Nacozari De Garc??a", "Navojoa", "Nogales", "Onavas", "Opodepe", "Oquitoa", "Pitiquito", "Puerto Pe??asco", "Quiriego", "Ray??n", "Rosario", "Sahuaripa", "San Felipe De Jes??s", "San Javier", "San Luis R??o Colorado", "San Miguel De Horcasitas", "San Pedro De La Cueva", "Santa Ana", "Santa Cruz", "S??ric", "Soyopa", "Suaqui Grande", "Tepache", "Trincheras", "Tubutama", "Ures", "Villa Hidalgo", "Villa Pesqueira", "Y??cora", "General Plutarco El??as Calles", "Benito Ju??rez", "San Ignacio R??o Muerto"],

		Tabasco : ["Balanc??n", "C??rdenas", "Centla", "Centro", "Comalcalco", "Cunduac??n", "Emiliano Zapata", "Huimanguillo", "Jalapa", "Jalpa De M??ndez", "Jonuta", "Macuspana", "Nacajuca", "Para??so", "Tacotalpa", "Teapa", "Tenosique"],

		Tamaulipas : ["Abasolo", "Aldama", "Altamira", "Antiguo Morelos", "Burgos", "Bustamante", "Camargo", "Casas", "Ciudad Madero", "Cruillas", "G??mez Far??as", "Gonz??lez", "G????mez", "Guerrero", "Gustavo D??az Ordaz", "Hidalgo", "Jaumave", "Jim??nez", "Llera", "Mainero", "El Mante", "Matamoros", "M??ndez", "Mier", "Miguel Alem??n", "Miquihuana", "Nuevo Laredo", "Nuevo Morelos", "Ocampo", "Padilla", "Palmillas", "Reynosa", "R??o Bravo", "San Carlos", "San Fernando", "San Nicol??s", "Soto La Marina", "Tampico", "Tula", "Valle Hermoso", "Victoria", "Villagr??n", "Xicot??ncatl"],

		Tlaxcala : ["Amaxac De Guerrero", "Apetatitl??n De Antonio Carvajal", "Atlangatepec", "Atltzayanca", "Apizaco", "Calpulalpan", "El Carmen Tequexquitla", "Cuapiaxtla", "Cuaxomulco", "Chiautempan", "Mu??oz De Domingo Arenas", "Espa??ita", "Huamantla", "Hueyotlipan", "Ixtacuixtla De Mariano Matamoros", "Ixtenco", "Mazatecochco De Jos?? Mar??a Morelos", "Contla De Juan Cuamatzi", "Tepetitla De Lardiz??bal", "Sanct??rum De L??zaro C??rdenas", "Nanacamilpa De Mariano Arista", "Acuamanala De Miguel Hidalgo", "Nat??vitas", "Panotla", "San Pablo Del Monte", "Santa Cruz Tlaxcala", "Tenancingo", "Teolocholco", "Tepeyanco", "Terrenate", "Tetla De La Solidaridad", "Tetlatlahuca", "Tlaxcala", "Tlaxco", "Tocatl??n", "Totolac", "Ziltlalt??pec De Trinidad S??nchez Santos", "Tzompantepec", "Xaloztoc", "Xaltocan", "Papalotla De Xicoht??ncatl", "Xicohtzinco", "Yauhquemehcan", "Zacatelco", "Benito Ju??rez", "Emiliano Zapata", "L??zaro C??rdenas", "La Magdalena Tlaltelulco", "San Dami??n Tex??loc", "San Francisco Tetlanohcan", "San Jer??nimo Zacualpan", "San Jos?? Teacalco", "San Juan Huactzinco", "San Lorenzo Axocomanitla", "San Lucas Tecopilco", "Santa Ana Nopalucan", "Santa Apolonia Teacalco", "Santa Catarina Ayometla", "Santa Cruz Quilehtla", "Santa Isabel Xiloxoxtla"],

		Veracruz : ["Acajete", "Acatl??n", "Acayucan", "Actopan", "Acula", "Acultzingo", "Camar??n De Tejeda", "Alpatl??huac", "Alto Lucero De Guti??rrez Barrios", "Altotonga", "Alvarado", "Amatitl??n", "Naranjos Amatl??n", "Amatl??n De Los Reyes", "Angel R. Cabada", "La Antigua", "Apazapan", "Aquila", "Astacinga", "Atlahuilco", "Atoyac", "Atzacan", "Atzalan", "Tlaltetela", "Ayahualulco", "Banderilla", "Benito Ju??rez", "Boca Del R??o", "Calcahualco", "Camerino Z. Mendoza", "Carrillo Puerto", "Catemaco", "Cazones De Herrera", "Cerro Azul", "Citlalt??petl", "Coacoatzintla", "Coahuitl??n", "Coatepec", "Coatzacoalcos", "Coatzintla", "Coetzala", "Colipa", "Comapa", "C??rdoba", "Cosamaloapan De Carpio", "Cosautl??n De Carvajal", "Coscomatepec", "Cosoleacaque", "Cotaxtla", "Coxquihui", "Coyutla", "Cuichapa", "Cuitl??huac", "Chacaltianguis", "Chalma", "Chiconamel", "Chiconquiaco", "Chicontepec", "Chinameca", "Chinampa De Gorostiza", "Las Choapas", "Chocam??n", "Chontla", "Chumatl??n", "Emiliano Zapata", "Espinal", "Filomeno Mata", "Fort??n", "Guti??rrez Zamora", "Hidalgotitl??n", "Huatusco", "Huayacocotla", "Hueyapan De Ocampo", "Huiloapan De Cuauht??moc", "Ignacio De La Llave", "Ilamatl??n", "Isla", "Ixcatepec", "Ixhuac??n De Los Reyes", "Ixhuatl??n Del Caf??", "Ixhuatlancillo", "Ixhuatl??n Del Sureste", "Ixhuatl??n De Madero", "Ixmatlahuacan", "Ixtaczoquitl??n", "Jalacingo", "Xalapa", "Jalcomulco", "J??ltipan", "Jamapa", "Jes??s Carranza", "Xico", "Jilotepec", "Juan Rodr??guez Clara", "Juchique De Ferrer", "Landero Y Coss", "Lerdo De Tejada", "Magdalena", "Maltrata", "Manlio Fabio Altamirano", "Mariano Escobedo", "Mart??nez De La Torre", "Mecatl??n", "Mecayapan", "Medell??n De Bravo", "Miahuatl??n", "Las Minas", "Minatitl??n", "Misantla", "Mixtla De Altamirano", "Moloac??n", "Naolinco", "Naranjal", "Nautla", "Nogales", "Oluta", "Omealca", "Orizaba", "Otatitl??n", "Oteapan", "Ozuluama De Mascare??as", "Pajapan", "P??nuco", "Papantla", "Paso Del Macho", "Paso De Ovejas", "La Perla", "Perote", "Plat??n S??nchez", "Playa Vicente", "Poza Rica De Hidalgo", "Las Vigas De Ram??rez", "Pueblo Viejo", "Puente Nacional", "Rafael Delgado", "Rafael Lucio", "Los Reyes", "R??o Blanco", "Saltabarranca", "San Andr??s Tenejapan", "San Andr??s Tuxtla", "San Juan Evangelista", "Santiago Tuxtla", "Sayula De Alem??n", "Soconusco", "Sochiapa", "Soledad Atzompa", "Soledad De Doblado", "Soteapan", "Tamal??n", "Tamiahua", "Tampico Alto", "Tancoco", "Tantima", "Tantoyuca", "Tatatila", "Castillo De Teayo", "Tecolutla", "Tehuipango", "??lamo Temapache", "Tempoal", "Tenampa", "Tenochtitl??n", "Teocelo", "Tepatlaxco", "Tepetl??n", "Tepetzintla", "Tequila", "Jos?? Azueta", "Texcatepec", "Texhuac??n", "Texistepec", "Tezonapa", "Tierra Blanca", "Tihuatl??n", "Tlacojalpan", "Tlacolulan", "Tlacotalpan", "Tlacotepec De Mej??a", "Tlachichilco", "Tlalixcoyan", "Tlalnelhuayocan", "Tlapacoyan", "Tlaquilpa", "Tlilapan", "Tomatl??n", "Tonay??n", "Totutla", "Tuxpan", "Tuxtilla", "Ursulo Galv??n", "Vega De Alatorre", "Veracruz", "Villa Aldama", "Xoxocotla", "Yanga", "Yecuatla", "Zacualpan", "Zaragoza", "Zentla", "Zongolica", "Zontecomatl??n De L??pez Y Fuentes", "Zozocolco De Hidalgo", "Agua Dulce", "El Higo", "Nanchital De L??zaro C??rdenas Del R??o", "Tres Valles", "Carlos A. Carrillo", "Tatahuicapan De Ju??rez", "Uxpanapa", "San Rafael", "Santiago Sochiapan"],

		Yucatan : ["Abal??", "Acanceh", "Akil", "Baca", "Bokob??", "Buctzotz", "Cacalch??n", "Calotmul", "Cansahcab", "Cantamayec", "Celest??n", "Cenotillo", "Conkal", "Cuncunul", "Cuzam??", "Chacsink??n", "Chankom", "Chapab", "Chemax", "Chicxulub Pueblo", "Chichimil??", "Chikindzonot", "Chochol??", "Chumayel", "Dz??n", "Dzemul", "Dzidzant??n", "Dzilam De Bravo", "Dzilam Gonz??lez", "Dzit??s", "Dzoncauich", "Espita", "Halach??", "Hocab??", "Hoct??n", "Hom??n", "Huh??", "Hunucm??", "Ixil", "Izamal", "Kanas??n", "Kantunil", "Kaua", "Kinchil", "Kopom??", "Mama", "Man??", "Maxcan??", "Mayap??n", "M??rida", "Mococh??", "Motul", "Muna", "Muxupip", "Opich??n", "Oxkutzcab", "Panab??", "Peto", "Progreso", "Quintana Roo", "R??o Lagartos", "Sacalum", "Samahil", "Sanahcat", "San Felipe", "Santa Elena", "Sey??", "Sinanch??", "Sotuta", "Sucil??", "Sudzal", "Suma", "Tahdzi??", "Tahmek", "Teabo", "Tecoh", "Tekal De Venegas", "Tekant??", "Tekax", "Tekit", "Tekom", "Telchac Pueblo", "Telchac Puerto", "Temax", "Temoz??n", "Tepak??n", "Tetiz", "Teya", "Ticul", "Timucuy", "Tinum", "Tixcacalcupul", "Tixkokob", "Tixmehuac", "Tixp??hual", "Tizim??n", "Tunk??s", "Tzucacab", "Uayma", "Uc??", "Um??n", "Valladolid", "Xocchel", "Yaxcab??", "Yaxkukul", "Yoba??n"],

		Zacatecas : ["Apozol", "Apulco", "Atolinga", "Benito Ju??rez", "Calera", "Ca??itas De Felipe Pescador", "Concepci??n Del Oro", "Cuauht??moc", "Chalchihuites", "Fresnillo", "Trinidad Garc??a De La Cadena", "Genaro Codina", "General Enrique Estrada", "General Francisco R. Murgu??a", "El Plateado De Joaqu??n Amaro", "General P??nfilo Natera", "Guadalupe", "Huanusco", "Jalpa", "Jerez", "Jim??nez Del Teul", "Juan Aldama", "Juchipila", "Loreto", "Luis Moya", "Mazapil", "Melchor Ocampo", "Mezquital Del Oro", "Miguel Auza", "Momax", "Monte Escobedo", "Morelos", "Moyahua De Estrada", "Nochistl??n De Mej??a", "Noria De ??ngeles", "Ojocaliente", "P??nuco", "Pinos", "R??o Grande", "Sain Alto", "El Salvador", "Sombrerete", "Susticac??n", "Tabasco", "Tepechitl??n", "Tepetongo", "Te??l De Gonz??lez Ortega", "Tlaltenango De S??nchez Rom??n", "Valpara??so", "Vetagrande", "Villa De Cos", "Villa Garc??a", "Villa Gonz??lez Ortega", "Villa Hidalgo", "Villanueva", "Zacatecas", "Trancoso", "Santa Mar??a De La Paz"]

	}

	$(function(){
		var fillSecondary = function(){
			var selected = $('#primary').val();
			$('#secondary').empty();
			options[selected].forEach(function(element,index){
				$('#secondary').append('<option value="'+element+'">'+element+'</option>');
			});
		}
		$('#primary').change(fillSecondary);
		fillSecondary();
	});
</script>
</html>