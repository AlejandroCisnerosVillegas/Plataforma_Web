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
				alert("¡Lo sentimos!\nPero no puede salir hasta que se complete el proceso de registro.")
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
					<div class="wrap-input100 form-group validate-input" data-validate = "Ingresa Ciudad o Estado.">
						<span class="label-input100"><b>Ciudad o Estado</b></span>
						<input type="text" class="input100"  placeholder="Ciudad o Estado" id="Ciudad_DUsuario" name="Ciudad_DUsuario" value="" required>
						<span class="focus-input100"></span>
					</div>
<!--===============================================================================================-->
<!--===============================================================================================-->					
					<div class="wrap-input100 form-group validate-input" data-validate = "ISelecciona un municipios, delegación o alcaldía.">
						<span class="label-input100"><b>CMunicipios, Delegación o Alcaldía</b></span>
						<input type="text" class="input100"  placeholder="Municipios, Delegación o Alcaldía" id="Minicipio_DUsuario" name="Minicipio_DUsuario" value="" required>
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
						<span class="label-input100"><b>Teléfono Celular</b></span>
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
						<span class="label-input100"><b>¿Qué tipo de vacante estas buscando?<br></br></b></span>
						<input checked type="radio" name="TVacante_DUsuario" value="Servicio Social"><span class="label-input100" style="color:#ffffff";>   Servicio Social</span><br></br>
						<input type="radio" name="TVacante_DUsuario" value="Prácticas Profesionales"><span class="label-input100" style="color:#ffffff";>   Prácticas Profesionales</span><br></br>
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
													<dd ALIGN="center"><a onClick="comprobarClave()">contacto@cenide.com.mx</a></dd>
												</dl>
												<dl class="contact-list">
													<dt ALIGN="center">Teléfono:</dt>
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
              <dt><a style="color:#ffffff";>COPYRIGHTS © 2019 - Sitio creado y hospedado en servicios digitales online.</a></dt>
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
		Aguascalientes : ["Aguascalientes", "Asientos", "Calvillo", "Cosío", "Jesús María", "Pabellón De Arteaga", "Rincón De Romos", "San José De Gracia", "Tepezalá", "El Llano", "San Francisco De Los Romo"],

		Baja_California : ["Ensenada", "Mexicali", "Tecate", "Tijuana", "Playas De Rosarito"],

		Baja_California_Sur : ["Comondú", "Mulegé", "La Paz", "Los Cabos", "Loreto"],

		Campeche : ["Calkiní", "Campeche", "Carmen", "Champotón", "Hecelchakán", "Hopelchén", "Palizada", "Tenabo", "Escárcega", "Calakmul", "Candelaria"],

		Chiapas : ["Acacoyagua", "Acala", "Acapetahua", "Altamirano", "Amatán", "Amatenango De La Frontera", "Amatenango Del Valle", "Angel Albino Corzo", "Arriaga", "Bejucal De Ocampo", "Bella Vista", "Berriozábal", "Bochil", "El Bosque", "Cacahoatán", "Catazajá", "Cintalapa", "Coapilla", "Comitán De Domínguez", "La Concordia", "Copainalá", "Chalchihuitán", "Chamula", "Chanal", "Chapultenango", "Chenalhó", "Chiapa De Corzo", "Chiapilla", "Chicoasén", "Chicomuselo", "Chilón", "Escuintla", "Francisco León", "Frontera Comalapa", "Frontera Hidalgo", "La Grandeza", "Huehuetán", "Huixtán", "Huitiupán", "Huixtla", "La Independencia", "Ixhuatán", "Ixtacomitán", "Ixtapa", "Ixtapangajoya", "Jiquipilas", "Jitotol", "Juárez", "Larráinzar", "La Libertad", "Mapastepec", "Las Margaritas", "Mazapa De Madero", "Mazatán", "Metapa", "Mitontic", "Motozintla", "Nicolás Ruíz", "Ocosingo", "Ocotepec", "Ocozocoautla De Espinosa", "Ostuacán", "Osumacinta", "Oxchuc", "Palenque", "Pantelhó", "Pantepec", "Pichucalco", "Pijijiapan", "El Porvenir", "Villa Comaltitlán", "Pueblo Nuevo Solistahuacán", "Rayón", "Reforma", "Las Rosas", "Sabanilla", "Salto De Agua", "San Cristóbal De Las Casas", "San Fernando", "Siltepec", "Simojovel", "Sitalá", "Socoltenango", "Solosuchiapa", "Soyaló", "Suchiapa", "Suchiate", "Sunuapa", "Tapachula", "Tapalapa", "Tapilula", "Tecpatán", "Tenejapa", "Teopisca", "Tila", "Tonalá", "Totolapa", "La Trinitaria", "Tumbalá", "Tuxtla Gutiérrez", "Tuxtla Chico", "Tuzantán", "Tzimol", "Unión Juárez", "Venustiano Carranza", "Villa Corzo", "Villaflores", "Yajalón", "San Lucas", "inacantán", "San Juan Cancuc", "Aldama", "Benemérito De Las Américas", "Maravilla Tenejapa", "Marqués De Comillas", "Montecristo De Guerrero", "San Andrés Duraznal", "Santiago El Pinar"],

		Chihuahua : ["Ahumada", "Aldama", "Allende", "Aquiles Serdán", "Ascensión", "Bachíniva", "Balleza", "Batopilas", "Bocoyna", "Buenaventura", "Camargo", "Carichí", "Casas Grandes", "Coronado", "Coyame Del Sotol", "La Cruz", "Cuauhtémoc", "Cusihuiriachi", "Chihuahua", "Chínipas", "Delicias", "Dr. Belisario Domínguez", "Galeana", "Santa Isabel", "Gómez Farías", "Gran Morelos", "Guachochi", "Guadalupe", "Guadalupe Y Calvo", "Guazapares", "Guerrero", "Hidalgo Del Parral", "Huejotitán", "Ignacio Zaragoza", "Janos", "Jiménez", "Juárez", "Julimes", "López", "Madera", "Maguarichi", "Manuel Benavides", "Matachí", "Matamoros", "Meoqui", "Morelos", "Moris", "Namiquipa", "Nonoava", "Nuevo Casas Grandes", "Ocampo", "Ojinaga", "Praxedis G. Guerrero", "Riva Palacio", "Rosales", "Rosario", "San Francisco De Borja", "San Francisco De Conchos", "San Francisco Del Oro", "Santa Bárbara", "Satevó", "Saucillo", "Temósachic", "El Tule", "Urique", "Uruachi", "Valle De Zaragoza"],

		Ciudad_de_Mexico : ["Azcapotzalco", "Coyoacán", "Cuajimalpa De Morelos", "Gustavo A. Madero", "Iztacalco", "Iztapalapa", "La Magdalena Contreras", "Milpa Alta", "Álvaro Obregón", "Tláhuac", "Tlalpan", "Xochimilco", "Benito Juárez", "Cuauhtémoc", "Miguel Hidalgo", "Venustiano Carranza"],

		Coahuila : ["Abasolo", "Acuña", "Allende", "Arteaga", "Candela", "Castaños", "Cuatro Ciénegas", "Escobedo", "Francisco I. Madero", "Frontera", "General Cepeda", "Guerrero", "Hidalgo", "Jiménez", "Juárez", "Lamadrid", "Matamoros", "Monclova", "Morelos", "Múzquiz", "Nadadores", "Nava", "Ocampo", "Parras", "Piedras Negras", "Progreso", "Ramos Arizpe", "Sabinas", "Sacramento", "Saltillo", "San Buenaventura", "San Juan De Sabinas", "San Pedro", "Sierra Mojada", "Torreón", "Viesca", "Villa Unión", "Zaragoza"],

		Colima : ["Armería", "Colima", "Comala", "Coquimatlán", "Cuauhtémoc", "Ixtlahuacán", "Manzanillo", "Minatitlán", "Tecomán", "Villa De Álvarez", "Durango", "Canatlán", "Canelas", "Coneto De Comonfort", "Cuencamé"],

		Durango : ["General Simón Bolívar", "Gómez Palacio", "Guadalupe Victoria", "Guanaceví", "Hidalgo", "Indé", "Lerdo", "Mapimí", "Mezquital", "Nazas", "Nombre De Dios", "Ocampo", "El Oro", "Otáez", "Pánuco De Coronado", "Peñón Blanco", "Poanas", "Pueblo Nuevo", "Rodeo", "San Bernardo", "San Dimas", "San Juan De Guadalupe", "San Juan Del Río", "San Luis Del Cordero", "San Pedro Del Gallo", "Santa Clara", "Santiago Papasquiaro", "Súchil", "Tamazula", "Tepehuanes", "Tlahualilo", "Topia", "Vicente Guerrero", "Nuevo Ideal"],

		Estado_de_Mexico : ["Acambay De Ruíz Castañeda", "Acolman", "Aculco", "Almoloya De Alquisiras", "Almoloya De Juárez", "Almoloya Del Río", "Amanalco", "Amatepec", "Amecameca", "Apaxco", "Atenco", "Atizapán", "Atizapán De Zaragoza", "Atlacomulco", "Atlautla", "Axapusco", "Ayapango", "Calimaya", "Capulhuac", "Coacalco De Berriozábal", "Coatepec Harinas", "Cocotitlán", "Coyotepec", "Cuautitlán", "Chalco", "Chapa De Mota", "Chapultepec", "Chiautla", "Chicoloapan", "Chiconcuac", "Chimalhuacán", "Donato Guerra", "Ecatepec De Morelos", "Ecatzingo", "Huehuetoca", "Hueypoxtla", "Huixquilucan", "Isidro Fabela", "Ixtapaluca", "Ixtapan De La Sal", "Ixtapan Del Oro", "Ixtlahuaca", "Xalatlaco", "Jaltenco", "Jilotepec", "Jilotzingo", "Jiquipilco", "Jocotitlán", "Joquicingo", "Juchitepec", "Lerma", "Malinalco", "Melchor Ocampo", "Metepec", "Mexicaltzingo", "Morelos", "Naucalpan De Juárez", "Nezahualcóyotl", "Nextlalpan", "Nicolás Romero", "Nopaltepec", "Ocoyoacac", "Ocuilan", "El Oro", "Otumba", "Otzoloapan", "Otzolotepec", "Ozumba", "Papalotla", "La Paz", "Polotitlán", "Rayón", "San Antonio La Isla", "San Felipe Del Progreso", "San Martín De Las Pirámides", "San Mateo Atenco", "San Simón De Guerrero", "Santo Tomás", "Soyaniquilpan De Juárez", "Sultepec", "Tecámac", "Tejupilco", "Temamatla", "Temascalapa", "Temascalcingo", "Temascaltepec", "Temoaya", "Tenancingo", "Tenango Del Aire", "Tenango Del Valle", "Teoloyucan", "Teotihuacán", "Tepetlaoxtoc", "Tepetlixpa", "Tepotzotlán", "Tequixquiac", "Texcaltitlán", "Texcalyacac", "Texcoco", "Tezoyuca", "Tianguistenco", "Timilpan", "Tlalmanalco", "Tlalnepantla De Baz", "Tlatlaya", "Toluca", "Tonatico", "Tultepec", "Tultitlán", "Valle De Bravo", "Villa De Allende", "Villa Del Carbón", "Villa Guerrero", "Villa Victoria", "Xonacatlán", "Zacazonapan", "Zacualpan", "Zinacantepec", "Zumpahuacán", "Zumpango", "Cuautitlán Izcalli", "Valle De Chalco Solidaridad", "Luvianos", "San José Del Rincón", "Tonanitla"],

		Guanajuato : ["Abasolo", "Acámbaro", "San Miguel De Allende", "Apaseo El Alto", "Apaseo El Grande", "Atarjea", "Celaya", "Manuel Doblado", "Comonfort", "Coroneo", "Cortazar", "Cuerámaro", "Doctor Mora", "Dolores Hidalgo Cuna De La Independencia Nacional", "Guanajuato", "Huanímaro", "Irapuato", "Jaral Del Progreso", "Jerécuaro", "León", "Moroleón", "Ocampo", "Pénjamo", "Pueblo Nuevo", "Purísima Del Rincón", "Romita", "Salamanca", "Salvatierra", "San Diego De La Unión", "San Felipe", "San Francisco Del Rincón", "San José Iturbide", "Santa Catarina", "Santa Cruz De Juventino Rosas", "Santiago Maravatío", "Silao De La Victoria", "Tarandacuao", "Tarimoro", "Tierra Blanca", "Uriangato", "Valle De Santiago", "Victoria", "Villagrán", "Xichú", "Yuriria"],

		Guerrero : ["Acapulco De Juárez", "Ahuacuotzingo", "Ajuchitlán Del Progreso", "Alcozauca De Guerrero", "Alpoyeca", "Apaxtla", "Arcelia", "Atenango Del Río", "Atlamajalcingo Del Monte", "Atlixtac", "Atoyac De Álvarez", "Ayutla De Los Libres", "Azoyú", "Benito Juárez", "Buenavista De Cuéllar", "Coahuayutla De José María Izazaga", "Cocula", "Copala", "Copalillo", "Copanatoyac", "Coyuca De Benítez", "Coyuca De Catalán", "Cuajinicuilapa", "Cualác", "Cuautepec", "Cuetzala Del Progreso", "Cutzamala De Pinzón", "Chilapa De Álvarez", "Chilpancingo De Los Bravo", "Florencio Villarreal", "General Canuto A. Neri", "General Heliodoro Castillo", "Huamuxtitlán", "Huitzuco De Los Figueroa", "Iguala De La Independencia", "Igualapa", "Ixcateopan De Cuauhtémoc", "Zihuatanejo De Azueta", "Juan R. Escudero", "Leonardo Bravo", "Malinaltepec", "Mártir De Cuilapan", "Metlatónoc", "Mochitlán", "Olinalá", "Ometepec", "Pedro Ascencio Alquisiras", "Petatlán", "Pilcaya", "Pungarabato", "Quechultenango", "San Luis Acatlán", "San Marcos", "San Miguel Totolapan", "Taxco De Alarcón", "Tecoanapa", "Técpan De Galeana", "Teloloapan", "Tepecoacuilco De Trujano", "Tetipac", "Tixtla De Guerrero", "Tlacoachistlahuaca", "Tlacoapa", "Tlalchapa", "Tlalixtaquilla De Maldonado", "Tlapa De Comonfort", "Tlapehuala", "La Unión De Isidoro Montes De Oca", "Xalpatláhuac", "Xochihuehuetlán", "Xochistlahuaca", "Zapotitlán Tablas", "Zirándaro", "Zitlala", "Eduardo Neri", "Acatepec", "Marquelia", "Cochoapa El Grande", "José Joaquín De Herrera", "Juchitán", "Iliatenco"],

		Hidalgo : ["Acatlán", "Acaxochitlán", "Actopan", "Agua Blanca De Iturbide", "Ajacuba", "Alfajayucan", "Almoloya", "Apan", "El Arenal", "Atitalaquia", "Atlapexco", "Atotonilco El Grande", "Atotonilco De Tula", "Calnali", "Cardonal", "Cuautepec De Hinojosa", "Chapantongo", "Chapulhuacán", "Chilcuautla", "Eloxochitlán", "Emiliano Zapata", "Epazoyucan", "Francisco I. Madero", "Huasca De Ocampo", "Huautla", "Huazalingo", "Huehuetla", "Huejutla De Reyes", "Huichapan", "Ixmiquilpan", "Jacala De Ledezma", "Jaltocán", "Juárez Hidalgo", "Lolotla", "Metepec", "San Agustín Metzquititlán", "Metztitlán", "Mineral Del Chico", "Mineral Del Monte", "La Misión", "Mixquiahuala De Juárez", "Molango De Escamilla", "Nicolás Flores", "Nopala De Villagrán", "Omitlán De Juárez", "San Felipe Orizatlán", "Pacula", "Pachuca De Soto", "Pisaflores", "Progreso De Obregón", "Mineral De La Reforma", "San Agustín Tlaxiaca", "San Bartolo Tutotepec", "San Salvador", "Santiago De Anaya", "Santiago Tulantepec De Lugo Guerrero", "Singuilucan", "Tasquillo", "Tecozautla", "Tenango De Doria", "Tepeapulco", "Tepehuacán De Guerrero", "Tepeji Del Río De Ocampo", "Tepetitlán", "Tetepango", "Villa De Tezontepec", "Tezontepec De Aldama", "Tianguistengo", "Tizayuca", "Tlahuelilpan", "Tlahuiltepa", "Tlanalapa", "Tlanchinol", "Tlaxcoapan", "Tolcayuca", "Tula De Allende", "Tulancingo De Bravo", "Xochiatipan", "Xochicoatlán", "Yahualica", "Zacualtipán De Ángeles", "Zapotlán De Juárez", "Zempoala", "Zimapán"],

		Jalisco : ["Acatic", "Acatlán De Juárez", "Ahualulco De Mercado", "Amacueca", "Amatitán", "Ameca", "San Juanito De Escobedo", "Arandas", "El Arenal", "Atemajac De Brizuela", "Atengo", "Atenguillo", "Atotonilco El Alto", "Atoyac", "Autlán De Navarro", "Ayotlán", "Ayutla", "La Barca", "Bolaños", "Cabo Corrientes", "Casimiro Castillo", "Cihuatlán", "Zapotlán El Grande", "Cocula", "Colotlán", "Concepción De Buenos Aires", "Cuautitlán De García Barragán", "Cuautla", "Cuquío", "Chapala", "Chimaltitán", "Chiquilistlán", "Degollado", "Ejutla", "Encarnación De Díaz", "Etzatlán", "El Grullo", "Guachinango", "Guadalajara", "Hostotipaquillo", "Huejúcar", "Huejuquilla El Alto", "La Huerta", "Ixtlahuacán De Los Membrillos", "Ixtlahuacán Del Río", "Jalostotitlán", "Jamay", "Jesús María", "Jilotlán De Los Dolores", "Jocotepec", "Juanacatlán", "Juchitlán", "Lagos De Moreno", "El Limón", "Magdalena", "Santa María Del Oro", "La Manzanilla De La Paz", "Mascota", "Mazamitla", "Mexticacán", "Mezquitic", "Mixtlán", "Ocotlán", "Ojuelos De Jalisco", "Pihuamo", "Poncitlán", "Puerto Vallarta", "Villa Purificación", "Quitupan", "El Salto", "San Cristóbal De La Barranca", "San Diego De Alejandría", "San Juan De Los Lagos", "San Julián", "San Marcos", "San Martín De Bolaños", "San Martín Hidalgo", "San Miguel El Alto", "Gómez Farías", "San Sebastián Del Oeste", "Santa María De Los Ángeles", "Sayula", "Tala", "Talpa De Allende", "Tamazula De Gordiano", "Tapalpa", "Tecalitlán", "Tecolotlán", "Techaluta De Montenegro", "Tenamaxtlán", "Teocaltiche", "Teocuitatlán De Corona", "Tepatitlán De Morelos", "Tequila", "Teuchitlán", "Tizapán El Alto", "Tlajomulco De Zúñiga", "San Pedro Tlaquepaque", "Tolimán", "Tomatlán", "Tonalá", "Tonaya", "Tonila", "Totatiche", "Tototlán", "Tuxcacuesco", "Tuxcueca", "Tuxpan", "Unión De San Antonio", "Unión De Tula", "Valle De Guadalupe", "Valle De Juárez", "San Gabriel", "Villa Corona", "Villa Guerrero", "Villa Hidalgo", "Cañadas De Obregón", "Yahualica De González Gallo", "Zacoalco De Torres", "Zapopan", "Zapotiltic", "Zapotitlán De Vadillo", "Zapotlán Del Rey", "Zapotlanejo", "San Ignacio Cerro Gordo"],

		Michoacan : ["Acuitzio", "Aguililla", "Álvaro Obregón", "Angamacutiro", "Angangueo", "Apatzingán", "Aporo", "Aquila", "Ario", "Arteaga", "Briseñas", "Buenavista", "Carácuaro", "Coahuayana", "Coalcomán De Vázquez Pallares", "Coeneo", "Contepec", "Copándaro", "Cotija", "Cuitzeo", "Charapan", "Charo", "Chavinda", "Cherán", "Chilchota", "Chinicuila", "Chucándiro", "Churintzio", "Churumuco", "Ecuandureo", "Epitacio Huerta", "Erongarícuaro", "Gabriel Zamora", "Hidalgo", "La Huacana", "Huandacareo", "Huaniqueo", "Huetamo", "Huiramba", "Indaparapeo", "Irimbo", "Ixtlán", "Jacona", "Jiménez", "Jiquilpan", "Juárez", "Jungapeo", "Lagunillas", "Madero", "Maravatío", "Marcos Castellanos", "Lázaro Cárdenas", "Morelia", "Morelos", "Múgica", "Nahuatzen", "Nocupétaro", "Nuevo Parangaricutiro", "Nuevo Urecho", "Numarán", "Ocampo", "Pajacuarán", "Panindícuaro", "Parácuaro", "Paracho", "Pátzcuaro", "Penjamillo", "Peribán", "La Piedad", "Purépero", "Puruándiro", "Queréndaro", "Quiroga", "Cojumatlán De Régules", "Los Reyes", "Sahuayo", "San Lucas", "Santa Ana Maya", "Salvador Escalante", "Senguio", "Susupuato", "Tacámbaro", "Tancítaro", "Tangamandapio", "Tangancícuaro", "Tanhuato", "Taretan", "Tarímbaro", "Tepalcatepec", "Tingambato", "Tingüindín", "Tiquicheo De Nicolás Romero", "Tlalpujahua", "Tlazazalca", "Tocumbo", "Tumbiscatío", "Turicato", "Tuxpan", "Tuzantla", "Tzintzuntzan", "Tzitzio", "Uruapan", "Venustiano Carranza", "Villamar", "Vista Hermosa", "Yurécuaro", "Zacapu", "Zamora", "Zináparo", "Zinapécuaro", "Ziracuaretiro", "Zitácuaro", "José Sixto Verduzco"],

		Morelos : ["Amacuzac", "Atlatlahucan", "Axochiapan", "Ayala", "Coatlán Del Río", "Cuautla", "Cuernavaca", "Emiliano Zapata", "Huitzilac", "Jantetelco", "Jiutepec", "Jojutla", "Jonacatepec De Leandro Valle", "Mazatepec", "Miacatlán", "Ocuituco", "Puente De Ixtla", "Temixco", "Tepalcingo", "Tepoztlán", "Tetecala", "Tetela Del Volcán", "Tlalnepantla", "Tlaltizapán De Zapata", "Tlaquiltenango", "Tlayacapan", "Totolapan", "Xochitepec", "Yautepec", "Yecapixtla", "Zacatepec", "Zacualpan De Amilpas", "Temoac"],

		Nayarit : ["Acaponeta", "Ahuacatlán", "Amatlán De Cañas", "Compostela", "Huajicori", "Ixtlán Del Río", "Jala", "Xalisco", "Del Nayar", "Rosamorada", "Ruíz", "San Blas", "San Pedro Lagunillas", "Santa María Del Oro", "Santiago Ixcuintla", "Tecuala", "Tepic", "Tuxpan", "La Yesca", "Bahía De Banderas"],

		Nuevo_Leon : ["Abasolo", "Agualeguas", "Los Aldamas", "Allende", "Anáhuac", "Apodaca", "Aramberri", "Bustamante", "Cadereyta Jiménez", "El Carmen", "Cerralvo", "Ciénega De Flores", "China", "Doctor Arroyo", "Doctor Coss", "Doctor González", "Galeana", "García", "San Pedro Garza García", "General Bravo", "General Escobedo", "General Terán", "General Treviño", "General Zaragoza", "General Zuazua", "Guadalupe", "Los Herreras", "Higueras", "Hualahuises", "Iturbide", "Juárez", "Lampazos De Naranjo", "Linares", "Marín", "Melchor Ocampo", "Mier Y Noriega", "Mina", "Montemorelos", "Monterrey", "Parás", "Pesquería", "Los Ramones", "Rayones", "Sabinas Hidalgo", "Salinas Victoria", "San Nicolás De Los Garza", "Hidalgo", "Santa Catarina", "Santiago", "Vallecillo", "Villaldama"],

		Oaxaca : ["Abejones", "Acatlán De Pérez Figueroa", "Asunción Cacalotepec", "Asunción Cuyotepeji", "Asunción Ixtaltepec", "Asunción Nochixtlán", "Asunción Ocotlán", "Asunción Tlacolulita", "Ayotzintepec", "El Barrio De La Soledad", "Calihualá", "Candelaria Loxicha", "Ciénega De Zimatlán", "Ciudad Ixtepec", "Coatecas Altas", "Coicoyán De Las Flores", "La Compañía", "Concepción Buenavista", "Concepción Pápalo", "Constancia Del Rosario", "Cosolapa", "Cosoltepec", "Cuilápam De Guerrero", "Cuyamecalco Villa De Zaragoza", "Chahuites", "Chalcatongo De Hidalgo", "Chiquihuitlán De Benito Juárez", "Heroica Ciudad De Ejutla De Crespo", "Eloxochitlán De Flores Magón", "El Espinal", "Tamazulápam Del Espíritu Santo", "Fresnillo De Trujano", "Guadalupe Etla", "Guadalupe De Ramírez", "Guelatao De Juárez", "Guevea De Humboldt", "Mesones Hidalgo", "Villa Hidalgo", "Heroica Ciudad De Huajuapan De León", "Huautepec", "Huautla De Jiménez", "Ixtlán De Juárez", "Heroica Ciudad De Juchitán De Zaragoza", "Loma Bonita", "Magdalena Apasco", "Magdalena Jaltepec", "Santa Magdalena Jicotlán", "Magdalena Mixtepec", "Magdalena Ocotlán", "Magdalena Peñasco", "Magdalena Teitipac", "Magdalena Tequisistlán", "Magdalena Tlacotepec", "Magdalena Zahuatlán", "Mariscala De Juárez", "Mártires De Tacubaya", "Matías Romero Avendaño", "Mazatlán Villa De Flores", "Miahuatlán De Porfirio Díaz", "Mixistlán De La Reforma", "Monjas", "Natividad", "Nazareno Etla", "Nejapa De Madero", "Ixpantepec Nieves", "Santiago Niltepec", "Oaxaca De Juárez", "Ocotlán De Morelos", "La Pe", "Pinotepa De Don Luis", "Pluma Hidalgo", "San José Del Progreso", "Putla Villa De Guerrero", "Santa Catarina Quioquitani", "Reforma De Pineda", "La Reforma", "Reyes Etla", "Rojas De Cuauhtémoc", "Salina Cruz", "San Agustín Amatengo", "San Agustín Atenango", "San Agustín Chayuco", "San Agustín De Las Juntas", "San Agustín Etla", "San Agustín Loxicha", "San Agustín Tlacotepec", "San Agustín Yatareni", "San Andrés Cabecera Nueva", "San Andrés Dinicuiti", "San Andrés Huaxpaltepec", "San Andrés Huayápam", "San Andrés Ixtlahuaca", "San Andrés Lagunas", "San Andrés Nuxiño", "San Andrés Paxtlán", "San Andrés Sinaxtla", "San Andrés Solaga", "San Andrés Teotilálpam", "San Andrés Tepetlapa", "San Andrés Yaá", "San Andrés Zabache", "San Andrés Zautla", "San Antonino Castillo Velasco", "San Antonino El Alto", "San Antonino Monte Verde", "San Antonio Acutla", "San Antonio De La Cal", "San Antonio Huitepec", "San Antonio Nanahuatípam", "San Antonio Sinicahua", "San Antonio Tepetlapa", "San Baltazar Chichicápam", "San Baltazar Loxicha", "San Baltazar Yatzachi El Bajo", "San Bartolo Coyotepec", "San Bartolomé Ayautla", "San Bartolomé Loxicha", "San Bartolomé Quialana", "San Bartolomé Yucuañe", "San Bartolomé Zoogocho", "San Bartolo Soyaltepec", "San Bartolo Yautepec", "San Bernardo Mixtepec", "San Blas Atempa", "San Carlos Yautepec", "San Cristóbal Amatlán", "San Cristóbal Amoltepec", "San Cristóbal Lachirioag", "San Cristóbal Suchixtlahuaca", "San Dionisio Del Mar", "San Dionisio Ocotepec", "San Dionisio Ocotlán", "San Esteban Atatlahuca", "San Felipe Jalapa De Díaz", "San Felipe Tejalápam", "San Felipe Usila", "San Francisco Cahuacuá", "San Francisco Cajonos", "San Francisco Chapulapa", "San Francisco Chindúa", "San Francisco Del Mar", "San Francisco Huehuetlán", "San Francisco Ixhuatán", "San Francisco Jaltepetongo", "San Francisco Lachigoló", "San Francisco Logueche", "San Francisco Nuxaño", "San Francisco Ozolotepec", "San Francisco Sola", "San Francisco Telixtlahuaca", "San Francisco Teopan", "San Francisco Tlapancingo", "San Gabriel Mixtepec", "San Ildefonso Amatlán", "San Ildefonso Sola", "San Ildefonso Villa Alta", "San Jacinto Amilpas", "San Jacinto Tlacotepec", "San Jerónimo Coatlán", "San Jerónimo Silacayoapilla", "San Jerónimo Sosola", "San Jerónimo Taviche", "San Jerónimo Tecóatl", "San Jorge Nuchita", "San José Ayuquila", "San José Chiltepec", "San José Del Peñasco", "San José Estancia Grande", "San José Independencia", "San José Lachiguiri", "San José Tenango", "San Juan Atepec", "Ánimas Trujano", "San Juan Bautista Atatlahuca", "San Juan Bautista Coixtlahuaca", "San Juan Bautista Cuicatlán", "San Juan Bautista Guelache", "San Juan Bautista Jayacatlán", "San Juan Bautista Lo De Soto", "San Juan Bautista Suchitepec", "San Juan Bautista Tlacoatzintepec", "San Juan Bautista Tlachichilco", "San Juan BautistaTuxtepec", "San Juan Cacahuatepec", "San Juan Cieneguilla", "San Juan Coatzóspam", "San Juan Colorado", "San Juan Comaltepec", "San Juan Cotzocón", "San Juan Chicomezúchil", "San Juan Chilateca", "San Juan Del Estado", "San Juan Del Río", "San Juan Diuxi", "San Juan Evangelista Analco", "San Juan Guelavía", "San Juan Guichicovi", "San Juan Ihualtepec", "San Juan Juquila Mixes", "San Juan Juquila Vijanos", "San Juan Lachao", "San Juan Lachigalla", "San Juan Lajarcia", "San Juan Lalana", "San Juan De Los Cués", "San Juan Mazatlán", "San Juan Mixtepec", "San Juan Mixtepec", "San Juan Ñumí", "San Juan Ozolotepec", "San Juan Petlapa", "San Juan Quiahije", "San Juan Quiotepec", "San Juan Sayultepec", "San Juan Tabaá", "San Juan Tamazola", "San Juan Teita", "San Juan Teitipac", "San Juan Tepeuxila", "San Juan Teposcolula", "San Juan Yaeé", "San Juan Yatzona", "San Juan Yucuita", "San Lorenzo", "San Lorenzo Albarradas", "San Lorenzo Cacaotepec", "San Lorenzo Cuaunecuiltitla", "San Lorenzo Texmelúcan", "San Lorenzo Victoria", "San Lucas Camotlán", "San Lucas Ojitlán", "San Lucas Quiaviní", "San Lucas Zoquiápam", "San Luis Amatlán", "San Marcial Ozolotepec", "San Marcos Arteaga", "San Martín De Los Cansecos", "San Martín Huamelúlpam", "San Martín Itunyoso", "San Martín Lachilá", "San Martín Peras", "San Martín Tilcajete", "San Martín Toxpalan", "San Martín Zacatepec", "San Mateo Cajonos", "Capulálpam De Méndez", "San Mateo Del Mar", "San Mateo Yoloxochitlán", "San Mateo Etlatongo", "San Mateo Nejápam", "San Mateo Peñasco", "San Mateo Piñas", "San Mateo Río Hondo", "San Mateo Sindihui", "San Mateo Tlapiltepec", "San Melchor Betaza", "San Miguel Achiutla", "San Miguel Ahuehuetitlán", "San Miguel Aloápam", "San Miguel Amatitlán", "San Miguel Amatlán", "San Miguel Coatlán", "San Miguel Chicahua", "San Miguel Chimalapa", "San Miguel Del Puerto", "San Miguel Del Río", "San Miguel Ejutla", "San Miguel El Grande", "San Miguel Huautla", "San Miguel Mixtepec", "San Miguel Panixtlahuaca", "San Miguel Peras", "San Miguel Piedras", "San Miguel Quetzaltepec", "San Miguel Santa Flor", "Villa Sola De Vega", "San Miguel Soyaltepec", "San Miguel Suchixtepec", "Villa Talea De Castro", "San Miguel Tecomatlán", "San Miguel Tenango", "San Miguel Tequixtepec", "San Miguel Tilquiápam", "San Miguel Tlacamama", "San Miguel Tlacotepec", "San Miguel Tulancingo", "San Miguel Yotao", "San Nicolás", "San Nicolás Hidalgo", "San Pablo Coatlán", "San Pablo Cuatro Venados", "San Pablo Etla", "San Pablo Huitzo", "San Pablo Huixtepec", "San Pablo Macuiltianguis", "San Pablo Tijaltepec", "San Pablo Villa De Mitla", "San Pablo Yaganiza", "San Pedro Amuzgos", "San Pedro Apóstol", "San Pedro Atoyac", "San Pedro Cajonos", "San Pedro Coxcaltepec Cántaros", "San Pedro Comitancillo", "San Pedro El Alto", "San Pedro Huamelula", "San Pedro Huilotepec", "San Pedro Ixcatlán", "San Pedro Ixtlahuaca", "San Pedro Jaltepetongo", "San Pedro Jicayán", "San Pedro Jocotipac", "San Pedro Juchatengo", "San Pedro Mártir", "San Pedro Mártir Quiechapa", "San Pedro Mártir Yucuxaco", "San Pedro Mixtepec", "San Pedro Mixtepec", "San Pedro Molinos", "San Pedro Nopala", "San Pedro Ocopetatillo", "San Pedro Ocotepec", "San Pedro Pochutla", "San Pedro Quiatoni", "San Pedro Sochiápam", "San Pedro Tapanatepec", "San Pedro Taviche", "San Pedro Teozacoalco", "San Pedro Teutila", "San Pedro Tidaá", "San Pedro Topiltepec", "San Pedro Totolápam", "Villa De Tututepec", "San Pedro Yaneri", "San Pedro Yólox", "San Pedro Y San Pablo Ayutla", "Villa De Etla", "San Pedro Y San Pablo Teposcolula", "San Pedro Y San Pablo Tequixtepec", "San Pedro Yucunama", "San Raymundo Jalpan", "San Sebastián Abasolo","San Sebastián Coatlán", "San Sebastián Ixcapa", "San Sebastián Nicananduta", "San Sebastián Río Hondo", "San Sebastián Tecomaxtlahuaca", "San Sebastián Teitipac", "San Sebastián Tutla", "San Simón Almolongas", "San Simón Zahuatlán", "Santa Ana", "Santa Ana Ateixtlahuaca", "Santa Ana Cuauhtémoc", "Santa Ana Del Valle", "Santa Ana Tavela", "Santa Ana Tlapacoyan", "Santa Ana Yareni", "Santa Ana Zegache", "Santa Catalina Quierí", "Santa Catarina Cuixtla", "Santa Catarina Ixtepeji", "Santa Catarina Juquila", "Santa Catarina Lachatao", "Santa Catarina Loxicha", "Santa Catarina Mechoacán", "Santa Catarina Minas", "Santa Catarina Quiané", "Santa Catarina Tayata", "Santa Catarina Ticuá", "Santa Catarina Yosonotú", "Santa Catarina Zapoquila", "Santa Cruz Acatepec", "Santa Cruz Amilpas", "Santa Cruz De Bravo", "Santa Cruz Itundujia", "Santa Cruz Mixtepec", "Santa Cruz Nundaco", "Santa Cruz Papalutla", "Santa Cruz Tacache De Mina", "Santa Cruz Tacahua", "Santa Cruz Tayata", "Santa Cruz Xitla", "Santa Cruz Xoxocotlán", "Santa Cruz Zenzontepec", "Santa Gertrudis", "Santa Inés Del Monte", "Santa Inés Yatzeche", "Santa Lucía Del Camino", "Santa Lucía Miahuatlán", "Santa Lucía Monteverde", "Santa Lucía Ocotlán", "Santa María Alotepec", "Santa María Apazco", "Santa María La Asunción", "Heroica Ciudad De Tlaxiaco", "Ayoquezco De Aldama", "Santa María Atzompa", "Santa María Camotlán", "Santa María Colotepec", "Santa María Cortijo", "Santa María Coyotepec", "Santa María Chachoápam", "Villa De Chilapa De Díaz", "Santa María Chilchotla", "Santa María Chimalapa", "Santa María Del Rosario", "Santa María Del Tule", "Santa María Ecatepec", "Santa María Guelacé", "Santa María Guienagati", "Santa María Huatulco", "Santa María Huazolotitlán", "Santa María Ipalapa", "Santa María Ixcatlán", "Santa María Jacatepec", "Santa María Jalapa Del Marqués", "Santa María Jaltianguis", "Santa María Lachixío", "Santa María Mixtequilla", "Santa María Nativitas", "Santa María Nduayaco", "Santa María Ozolotepec", "Santa María Pápalo", "Santa María Peñoles", "Santa María Petapa", "Santa María Quiegolani", "Santa María Sola", "Santa María Tataltepec", "Santa María Tecomavaca", "Santa María Temaxcalapa", "Santa María Temaxcaltepec", "Santa María Teopoxco", "Santa María Tepantlali", "Santa María Texcatitlán", "Santa María Tlahuitoltepec", "Santa María Tlalixtac", "Santa María Tonameca", "Santa María Totolapilla", "Santa María Xadani", "Santa María Yalina", "Santa María Yavesía", "Santa María Yolotepec", "Santa María Yosoyúa", "Santa María Yucuhiti", "Santa María Zacatepec", "Santa María Zaniza", "Santa María Zoquitlán", "Santiago Amoltepec", "Santiago Apoala", "Santiago Apóstol", "Santiago Astata", "Santiago Atitlán", "Santiago Ayuquililla", "Santiago Cacaloxtepec", "Santiago Camotlán", "Santiago Comaltepec", "Santiago Chazumba", "Santiago Choápam", "Santiago Del Río", "Santiago Huajolotitlán", "Santiago Huauclilla", "Santiago Ihuitlán Plumas", "Santiago Ixcuintepec", "Santiago Ixtayutla", "Santiago Jamiltepec", "Santiago Jocotepec", "Santiago Juxtlahuaca", "Santiago Lachiguiri", "Santiago Lalopa", "Santiago Laollaga", "Santiago Laxopa", "Santiago Llano Grande", "Santiago Matatlán", "Santiago Miltepec", "Santiago Minas", "Santiago Nacaltepec", "Santiago Nejapilla", "Santiago Nundiche", "Santiago Nuyoó", "Santiago Pinotepa Nacional", "Santiago Suchilquitongo", "Santiago Tamazola", "Santiago Tapextla", "Villa Tejúpam De La Unión", "Santiago Tenango", "Santiago Tepetlapa", "Santiago Tetepec", "Santiago Texcalcingo", "Santiago Textitlán", "Santiago Tilantongo", "Santiago Tillo", "Santiago Tlazoyaltepec", "Santiago Xanica", "Santiago Xiacuí", "Santiago Yaitepec", "Santiago Yaveo", "Santiago Yolomécatl", "Santiago Yosondúa", "Santiago Yucuyachi", "Santiago Zacatepec", "Santiago Zoochila", "Nuevo Zoquiápam", "Santo Domingo Ingenio", "Santo Domingo Albarradas", "Santo Domingo Armenta", "Santo Domingo Chihuitán", "Santo Domingo De Morelos", "Santo Domingo Ixcatlán", "Santo Domingo Nuxaá", "Santo Domingo Ozolotepec", "Santo Domingo Petapa", "Santo Domingo Roayaga", "Santo Domingo Tehuantepec", "Santo Domingo Teojomulco", "Santo Domingo Tepuxtepec", "Santo Domingo Tlatayápam", "Santo Domingo Tomaltepec", "Santo Domingo Tonalá", "Santo Domingo Tonaltepec", "Santo Domingo Xagacía", "Santo Domingo Yanhuitlán", "Santo Domingo Yodohino", "Santo Domingo Zanatepec", "Santos Reyes Nopala", "Santos Reyes Pápalo", "Santos Reyes Tepejillo", "Santos Reyes Yucuná", "Santo Tomás Jalieza", "Santo Tomás Mazaltepec", "Santo Tomás Ocotepec", "Santo Tomás Tamazulapan", "San Vicente Coatlán", "San Vicente Lachixío", "San Vicente Nuñú", "Silacayoápam", "Sitio De Xitlapehua", "Soledad Etla", "Villa De Tamazulápam Del Progreso", "Tanetze De Zaragoza", "Taniche", "Tataltepec De Valdés", "Teococuilco De Marcos Pérez", "Teotitlán De Flores Magón", "Teotitlán Del Valle", "Teotongo", "Tepelmeme Villa De Morelos", "Villa Tezoatlán De Segura Y Luna", "San Jerónimo Tlacochahuaya", "Tlacolula De Matamoros", "Tlacotepec Plumas", "Tlalixtac De Cabrera", "Totontepec Villa De Morelos", "Trinidad Zaachila", "La Trinidad Vista Hermosa", "Unión Hidalgo", "Valerio Trujano", "San Juan Bautista Valle Nacional", "Villa Díaz Ordaz", "Yaxe", "Magdalena Yodocono De Porfirio Díaz", "Yogana", "Yutanduchi De Guerrero", "Villa De Zaachila", "San Mateo Yucutindoo", "Zapotitlán Lagunas", "Zapotitlán Palmas", "Santa Inés De Zaragoza", "Zimatlán De Álvarez"],

		Puebla : ["Acajete", "Acateno", "Acatlán", "Acatzingo", "Acteopan", "Ahuacatlán", "Ahuatlán", "Ahuazotepec", "Ahuehuetitla", "Ajalpan", "Albino Zertuche", "Aljojuca", "Altepexi", "Amixtlán", "Amozoc", "Aquixtla", "Atempan", "Atexcal", "Atlixco", "Atoyatempan", "Atzala", "Atzitzihuacán", "Atzitzintla", "Axutla", "Ayotoxco De Guerrero", "Calpan", "Caltepec", "Camocuautla", "Caxhuacan", "Coatepec", "Coatzingo", "Cohetzala", "Cohuecan", "Coronango", "Coxcatlán", "Coyomeapan", "Coyotepec", "Cuapiaxtla De Madero", "Cuautempan", "Cuautinchán", "Cuautlancingo", "Cuayuca De Andrade", "Cuetzalan Del Progreso", "Cuyoaco", "Chalchicomula De Sesma", "Chapulco", "Chiautla", "Chiautzingo", "Chiconcuautla", "Chichiquila", "Chietla", "Chigmecatitlán", "Chignahuapan", "Chignautla", "Chila", "Chila De La Sal", "Honey", "Chilchotla", "Chinantla", "Domingo Arenas", "Eloxochitlán", "Epatlán", "Esperanza", "Francisco Z. Mena", "General Felipe Ángeles", "Guadalupe", "Guadalupe Victoria", "Hermenegildo Galeana", "Huaquechula", "Huatlatlauca", "Huauchinango", "Huehuetla", "Huehuetlán El Chico", "Huejotzingo", "Hueyapan", "Hueytamalco", "Hueytlalpan", "Huitzilan De Serdán", "Huitziltepec", "Atlequizayan", "Ixcamilpa De Guerrero", "Ixcaquixtla", "Ixtacamaxtitlán", "Ixtepec", "Izúcar De Matamoros", "Jalpan", "Jolalpan", "Jonotla", "Jopala", "Juan C. Bonilla", "Juan Galindo", "Juan N. Méndez", "Lafragua", "Libres", "La Magdalena Tlatlauquitepec", "Mazapiltepec De Juárez", "Mixtla", "Molcaxac", "Cañada Morelos", "Naupan", "Nauzontla", "Nealtican", "Nicolás Bravo", "Nopalucan", "Ocotepec", "Ocoyucan", "Olintla", "Oriental", "Pahuatlán", "Palmar De Bravo", "Pantepec", "Petlalcingo", "Piaxtla", "Puebla", "Quecholac", "Quimixtlán", "Rafael Lara Grajales", "Los Reyes De Juárez", "San Andrés Cholula", "San Antonio Cañada", "San Diego La Mesa Tochimiltzingo", "San Felipe Teotlalcingo", "San Felipe Tepatlán", "San Gabriel Chilac", "San Gregorio Atzompa", "San Jerónimo Tecuanipan", "San Jerónimo Xayacatlán", "San José Chiapa", "San José Miahuatlán", "San Juan Atenco", "San Juan Atzompa", "San Martín Texmelucan", "San Martín Totoltepec", "San Matías Tlalancaleca", "San Miguel Ixitlán", "San Miguel Xoxtla", "San Nicolás Buenos Aires", "San Nicolás De Los Ranchos", "San Pablo Anicano", "San Pedro Cholula", "San Pedro Yeloixtlahuaca", "San Salvador El Seco", "San Salvador El Verde", "San Salvador Huixcolotla", "San Sebastián Tlacotepec", "Santa Catarina Tlaltempan", "Santa Inés Ahuatempan", "Santa Isabel Cholula", "Santiago Miahuatlán", "Huehuetlán El Grande", "Santo Tomás Hueyotlipan", "Soltepec", "Tecali De Herrera", "Tecamachalco", "Tecomatlán", "Tehuacán", "Tehuitzingo", "Tenampulco", "Teopantlán", "Teotlalco", "Tepanco De López", "Tepango De Rodríguez", "Tepatlaxco De Hidalgo", "Tepeaca", "Tepemaxalco", "Tepeojuma", "Tepetzintla", "Tepexco", "Tepexi De Rodríguez", "Tepeyahualco", "Tepeyahualco De Cuauhtémoc", "Tetela De Ocampo", "Teteles De Avila Castillo", "Teziutlán", "Tianguismanalco", "Tilapa", "Tlacotepec De Benito Juárez", "Tlacuilotepec", "Tlachichuca", "Tlahuapan", "Tlaltenango", "Tlanepantla", "Tlaola", "Tlapacoya", "Tlapanalá", "Tlatlauquitepec", "Tlaxco", "Tochimilco", "Tochtepec", "Totoltepec De Guerrero", "Tulcingo", "Tuzamapan De Galeana", "Tzicatlacoyan", "Venustiano Carranza", "Vicente Guerrero", "Xayacatlán De Bravo", "Xicotepec", "Xicotlán", "Xiutetelco", "Xochiapulco", "Xochiltepec", "Xochitlán De Vicente Suárez", "Xochitlán Todos Santos", "Yaonáhuac", "Yehualtepec", "Zacapala", "Zacapoaxtla", "Zacatlán", "Zapotitlán", "Zapotitlán De Méndez", "Zaragoza", "Zautla", "Zihuateutla", "Zinacatepec", "Zongozotla", "Zoquiapan", "Zoquitlán"],

		Queretaro : ["Amealco De Bonfil", "Pinal De Amoles", "Arroyo Seco", "Cadereyta De Montes", "Colón", "Corregidora", "Ezequiel Montes", "Huimilpan", "Jalpan De Serra", "Landa De Matamoros", "El Marqués", "Pedro Escobedo", "Peñamiller", "Querétaro", "San Joaquín", "San Juan Del Río", "Tequisquiapan", "Tolimán"],

		Quintana_Roo : ["Cozumel", "Felipe Carrillo Puerto", "Isla Mujeres", "Othón P. Blanco", "Benito Juárez", "José María Morelos", "Lázaro Cárdenas", "Solidaridad", "Tulum", "Bacalar", "Puerto Morelos", "San Luis Potosí", "Ahualulco", "Alaquines", "Aquismón", "Armadillo De Los Infante", "Cárdenas", "Catorce", "Cedral", "Cerritos", "Cerro De San Pedro", "Ciudad Del Maíz", "Ciudad Fernández", "Tancanhuitz", "Ciudad Valles", "Coxcatlán", "Charcas", "Ebano", "Guadalcázar", "Huehuetlán", "Lagunillas", "Matehuala", "Mexquitic De Carmona", "Moctezuma", "Rayón", "Rioverde", "Salinas", "San Antonio", "San Ciro De Acosta"],

		San_Luis_Potosi : ["San Martín Chalchicuautla", "San Nicolás Tolentino", "Santa Catarina", "Santa María Del Río", "Santo Domingo", "San Vicente Tancuayalab", "Soledad De Graciano Sánchez", "Tamasopo", "Tamazunchale", "Tampacán", "Tampamolón Corona", "Tamuín", "Tanlajás", "Tanquián De Escobedo", "Tierra Nueva", "Vanegas", "Venado", "Villa De Arriaga", "Villa De Guadalupe", "Villa De La Paz", "Villa De Ramos", "Villa De Reyes", "Villa Hidalgo", "Villa Juárez", "Axtla De Terrazas", "Xilitla", "Zaragoza", "Villa De Arista", "Matlapa", "El Naranjo"],

		Sinaloa : ["Ahome", "Angostura", "Badiraguato", "Concordia", "Cosalá", "Culiacán", "Choix", "Elota", "Escuinapa", "El Fuerte", "Guasave", "Mazatlán", "Mocorito", "Rosario", "Salvador Alvarado", "San Ignacio", "Sinaloa", "Navolato"],

		Sonora : ["Aconchi", "Agua Prieta", "Alamos", "Altar", "Arivechi", "Arizpe", "Atil", "Bacadéhuachi", "Bacanora", "Bacerac", "Bacoachi", "Bácum", "Banámichi", "Baviácora", "Bavispe", "Benjamín Hill", "Caborca", "Cajeme", "Cananea", "Carbó", "La Colorada", "Cucurpe", "Cumpas", "Divisaderos", "Empalme", "Etchojoa", "Fronteras", "Granados", "Guaymas", "Hermosillo", "Huachinera", "Huásabas", "Huatabampo", "Huépac", "Imuris", "Magdalena", "Mazatán", "Moctezuma", "Naco", "Nácori Chico", "Nacozari De García", "Navojoa", "Nogales", "Onavas", "Opodepe", "Oquitoa", "Pitiquito", "Puerto Peñasco", "Quiriego", "Rayón", "Rosario", "Sahuaripa", "San Felipe De Jesús", "San Javier", "San Luis Río Colorado", "San Miguel De Horcasitas", "San Pedro De La Cueva", "Santa Ana", "Santa Cruz", "Sáric", "Soyopa", "Suaqui Grande", "Tepache", "Trincheras", "Tubutama", "Ures", "Villa Hidalgo", "Villa Pesqueira", "Yécora", "General Plutarco Elías Calles", "Benito Juárez", "San Ignacio Río Muerto"],

		Tabasco : ["Balancán", "Cárdenas", "Centla", "Centro", "Comalcalco", "Cunduacán", "Emiliano Zapata", "Huimanguillo", "Jalapa", "Jalpa De Méndez", "Jonuta", "Macuspana", "Nacajuca", "Paraíso", "Tacotalpa", "Teapa", "Tenosique"],

		Tamaulipas : ["Abasolo", "Aldama", "Altamira", "Antiguo Morelos", "Burgos", "Bustamante", "Camargo", "Casas", "Ciudad Madero", "Cruillas", "Gómez Farías", "González", "Güémez", "Guerrero", "Gustavo Díaz Ordaz", "Hidalgo", "Jaumave", "Jiménez", "Llera", "Mainero", "El Mante", "Matamoros", "Méndez", "Mier", "Miguel Alemán", "Miquihuana", "Nuevo Laredo", "Nuevo Morelos", "Ocampo", "Padilla", "Palmillas", "Reynosa", "Río Bravo", "San Carlos", "San Fernando", "San Nicolás", "Soto La Marina", "Tampico", "Tula", "Valle Hermoso", "Victoria", "Villagrán", "Xicoténcatl"],

		Tlaxcala : ["Amaxac De Guerrero", "Apetatitlán De Antonio Carvajal", "Atlangatepec", "Atltzayanca", "Apizaco", "Calpulalpan", "El Carmen Tequexquitla", "Cuapiaxtla", "Cuaxomulco", "Chiautempan", "Muñoz De Domingo Arenas", "Españita", "Huamantla", "Hueyotlipan", "Ixtacuixtla De Mariano Matamoros", "Ixtenco", "Mazatecochco De José María Morelos", "Contla De Juan Cuamatzi", "Tepetitla De Lardizábal", "Sanctórum De Lázaro Cárdenas", "Nanacamilpa De Mariano Arista", "Acuamanala De Miguel Hidalgo", "Natívitas", "Panotla", "San Pablo Del Monte", "Santa Cruz Tlaxcala", "Tenancingo", "Teolocholco", "Tepeyanco", "Terrenate", "Tetla De La Solidaridad", "Tetlatlahuca", "Tlaxcala", "Tlaxco", "Tocatlán", "Totolac", "Ziltlaltépec De Trinidad Sánchez Santos", "Tzompantepec", "Xaloztoc", "Xaltocan", "Papalotla De Xicohténcatl", "Xicohtzinco", "Yauhquemehcan", "Zacatelco", "Benito Juárez", "Emiliano Zapata", "Lázaro Cárdenas", "La Magdalena Tlaltelulco", "San Damián Texóloc", "San Francisco Tetlanohcan", "San Jerónimo Zacualpan", "San José Teacalco", "San Juan Huactzinco", "San Lorenzo Axocomanitla", "San Lucas Tecopilco", "Santa Ana Nopalucan", "Santa Apolonia Teacalco", "Santa Catarina Ayometla", "Santa Cruz Quilehtla", "Santa Isabel Xiloxoxtla"],

		Veracruz : ["Acajete", "Acatlán", "Acayucan", "Actopan", "Acula", "Acultzingo", "Camarón De Tejeda", "Alpatláhuac", "Alto Lucero De Gutiérrez Barrios", "Altotonga", "Alvarado", "Amatitlán", "Naranjos Amatlán", "Amatlán De Los Reyes", "Angel R. Cabada", "La Antigua", "Apazapan", "Aquila", "Astacinga", "Atlahuilco", "Atoyac", "Atzacan", "Atzalan", "Tlaltetela", "Ayahualulco", "Banderilla", "Benito Juárez", "Boca Del Río", "Calcahualco", "Camerino Z. Mendoza", "Carrillo Puerto", "Catemaco", "Cazones De Herrera", "Cerro Azul", "Citlaltépetl", "Coacoatzintla", "Coahuitlán", "Coatepec", "Coatzacoalcos", "Coatzintla", "Coetzala", "Colipa", "Comapa", "Córdoba", "Cosamaloapan De Carpio", "Cosautlán De Carvajal", "Coscomatepec", "Cosoleacaque", "Cotaxtla", "Coxquihui", "Coyutla", "Cuichapa", "Cuitláhuac", "Chacaltianguis", "Chalma", "Chiconamel", "Chiconquiaco", "Chicontepec", "Chinameca", "Chinampa De Gorostiza", "Las Choapas", "Chocamán", "Chontla", "Chumatlán", "Emiliano Zapata", "Espinal", "Filomeno Mata", "Fortín", "Gutiérrez Zamora", "Hidalgotitlán", "Huatusco", "Huayacocotla", "Hueyapan De Ocampo", "Huiloapan De Cuauhtémoc", "Ignacio De La Llave", "Ilamatlán", "Isla", "Ixcatepec", "Ixhuacán De Los Reyes", "Ixhuatlán Del Café", "Ixhuatlancillo", "Ixhuatlán Del Sureste", "Ixhuatlán De Madero", "Ixmatlahuacan", "Ixtaczoquitlán", "Jalacingo", "Xalapa", "Jalcomulco", "Jáltipan", "Jamapa", "Jesús Carranza", "Xico", "Jilotepec", "Juan Rodríguez Clara", "Juchique De Ferrer", "Landero Y Coss", "Lerdo De Tejada", "Magdalena", "Maltrata", "Manlio Fabio Altamirano", "Mariano Escobedo", "Martínez De La Torre", "Mecatlán", "Mecayapan", "Medellín De Bravo", "Miahuatlán", "Las Minas", "Minatitlán", "Misantla", "Mixtla De Altamirano", "Moloacán", "Naolinco", "Naranjal", "Nautla", "Nogales", "Oluta", "Omealca", "Orizaba", "Otatitlán", "Oteapan", "Ozuluama De Mascareñas", "Pajapan", "Pánuco", "Papantla", "Paso Del Macho", "Paso De Ovejas", "La Perla", "Perote", "Platón Sánchez", "Playa Vicente", "Poza Rica De Hidalgo", "Las Vigas De Ramírez", "Pueblo Viejo", "Puente Nacional", "Rafael Delgado", "Rafael Lucio", "Los Reyes", "Río Blanco", "Saltabarranca", "San Andrés Tenejapan", "San Andrés Tuxtla", "San Juan Evangelista", "Santiago Tuxtla", "Sayula De Alemán", "Soconusco", "Sochiapa", "Soledad Atzompa", "Soledad De Doblado", "Soteapan", "Tamalín", "Tamiahua", "Tampico Alto", "Tancoco", "Tantima", "Tantoyuca", "Tatatila", "Castillo De Teayo", "Tecolutla", "Tehuipango", "Álamo Temapache", "Tempoal", "Tenampa", "Tenochtitlán", "Teocelo", "Tepatlaxco", "Tepetlán", "Tepetzintla", "Tequila", "José Azueta", "Texcatepec", "Texhuacán", "Texistepec", "Tezonapa", "Tierra Blanca", "Tihuatlán", "Tlacojalpan", "Tlacolulan", "Tlacotalpan", "Tlacotepec De Mejía", "Tlachichilco", "Tlalixcoyan", "Tlalnelhuayocan", "Tlapacoyan", "Tlaquilpa", "Tlilapan", "Tomatlán", "Tonayán", "Totutla", "Tuxpan", "Tuxtilla", "Ursulo Galván", "Vega De Alatorre", "Veracruz", "Villa Aldama", "Xoxocotla", "Yanga", "Yecuatla", "Zacualpan", "Zaragoza", "Zentla", "Zongolica", "Zontecomatlán De López Y Fuentes", "Zozocolco De Hidalgo", "Agua Dulce", "El Higo", "Nanchital De Lázaro Cárdenas Del Río", "Tres Valles", "Carlos A. Carrillo", "Tatahuicapan De Juárez", "Uxpanapa", "San Rafael", "Santiago Sochiapan"],

		Yucatan : ["Abalá", "Acanceh", "Akil", "Baca", "Bokobá", "Buctzotz", "Cacalchén", "Calotmul", "Cansahcab", "Cantamayec", "Celestún", "Cenotillo", "Conkal", "Cuncunul", "Cuzamá", "Chacsinkín", "Chankom", "Chapab", "Chemax", "Chicxulub Pueblo", "Chichimilá", "Chikindzonot", "Chocholá", "Chumayel", "Dzán", "Dzemul", "Dzidzantún", "Dzilam De Bravo", "Dzilam González", "Dzitás", "Dzoncauich", "Espita", "Halachó", "Hocabá", "Hoctún", "Homún", "Huhí", "Hunucmá", "Ixil", "Izamal", "Kanasín", "Kantunil", "Kaua", "Kinchil", "Kopomá", "Mama", "Maní", "Maxcanú", "Mayapán", "Mérida", "Mocochá", "Motul", "Muna", "Muxupip", "Opichén", "Oxkutzcab", "Panabá", "Peto", "Progreso", "Quintana Roo", "Río Lagartos", "Sacalum", "Samahil", "Sanahcat", "San Felipe", "Santa Elena", "Seyé", "Sinanché", "Sotuta", "Sucilá", "Sudzal", "Suma", "Tahdziú", "Tahmek", "Teabo", "Tecoh", "Tekal De Venegas", "Tekantó", "Tekax", "Tekit", "Tekom", "Telchac Pueblo", "Telchac Puerto", "Temax", "Temozón", "Tepakán", "Tetiz", "Teya", "Ticul", "Timucuy", "Tinum", "Tixcacalcupul", "Tixkokob", "Tixmehuac", "Tixpéhual", "Tizimín", "Tunkás", "Tzucacab", "Uayma", "Ucú", "Umán", "Valladolid", "Xocchel", "Yaxcabá", "Yaxkukul", "Yobaín"],

		Zacatecas : ["Apozol", "Apulco", "Atolinga", "Benito Juárez", "Calera", "Cañitas De Felipe Pescador", "Concepción Del Oro", "Cuauhtémoc", "Chalchihuites", "Fresnillo", "Trinidad García De La Cadena", "Genaro Codina", "General Enrique Estrada", "General Francisco R. Murguía", "El Plateado De Joaquín Amaro", "General Pánfilo Natera", "Guadalupe", "Huanusco", "Jalpa", "Jerez", "Jiménez Del Teul", "Juan Aldama", "Juchipila", "Loreto", "Luis Moya", "Mazapil", "Melchor Ocampo", "Mezquital Del Oro", "Miguel Auza", "Momax", "Monte Escobedo", "Morelos", "Moyahua De Estrada", "Nochistlán De Mejía", "Noria De Ángeles", "Ojocaliente", "Pánuco", "Pinos", "Río Grande", "Sain Alto", "El Salvador", "Sombrerete", "Susticacán", "Tabasco", "Tepechitlán", "Tepetongo", "Teúl De González Ortega", "Tlaltenango De Sánchez Román", "Valparaíso", "Vetagrande", "Villa De Cos", "Villa García", "Villa González Ortega", "Villa Hidalgo", "Villanueva", "Zacatecas", "Trancoso", "Santa María De La Paz"]

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