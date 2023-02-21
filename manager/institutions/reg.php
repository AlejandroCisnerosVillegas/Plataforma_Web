<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
<!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
<!-- Pagina Administrador CSS -->
	<link href="../assets/css/institutions.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS Estilos Externos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="card">
		<div class="header">
			<h4 class="title" style="color:#ffffff";>Datos de la Institución</h4>
		</div>
		<div class="content">
			<form method="POST" action="DBA00" autocomplete="on">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de la Institución</b></label>
							<input type="text" class="form-control"  placeholder="Nombre de la Institución" id="Nombre_Institucion" name="Nombre_Institucion" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nivel</b></label>
							<select class="form-control" id="Nivel_Institucion" name="Nivel_Institucion">
								<option value="Primaria">Primaria</option>
								<option value="Secundaria">Secundaria</option>
								<option value="Media Superior">Media Superior</option>
								<option value="Superior">Superior</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Dependencia</b></label>
							<select class="form-control" id="Dependencia_Institucion" name="Dependencia_Institucion">
								<option value="Publica">Publica</option>
								<option value="Privada">Privada</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Turno</b></label>
							<select class="form-control" id="Turno_Institucion" name="Turno_Institucion">
								<option value="Matutino">Matutino</option>
								<option value="Vespertino">Vespertino</option>
								<option value="Ambos Turnos">Ambos Turnos</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Clave</b></label>
							<input type="text" class="form-control"  placeholder="Clave de la Institución" id="Clave_Institucione" name="Clave_Institucion" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Plantel o Campus</b></label>
							<input type="text" class="form-control"  placeholder="Nombre del plantel o campus" id="Nombre_Plantel" name="Nombre_Plantel" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carreras Ofertadas</b></label>
							<textarea rows="5" class="form-control"  placeholder="Lista de Carreras Ofertadas" id="Carreras_Institucion" name="Carreras_Institucion" required value=""></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Medios de Contacto</b></label>
							<textarea rows="5" class="form-control"  placeholder="Lista de Medios de Contacto" id="Medios_Institucion" name="Medios_Institucion" required value=""></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Vacantes Disponibles</b></label>
							<textarea rows="5" class="form-control"  placeholder="Lista de Vacantes Disponibles" id="Vacantes_Institucion" name="Vacantes_Institucion" required value=""></textarea>
						</div>
					</div>
				</div>
				<div class="header">
					<h4 class="title" style="color:#ffffff";>Ubicación de la Institución</h4>
					<br></br>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
								<select id="primary" class="form-control" name="Estado_Institucion">
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
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Municipio / Delegación / Alcaldía</b></label>
							<select id="secondary" class="form-control" name="Delegacion_Institucion"></select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Colonia / Pueblo</b></label>
							<input type="text" class="form-control"  placeholder="Granjas San Antonio" id="Colonia_Institucion" name="Colonia_Institucion" value="" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Calle / Avenida</b></label>
							<input type="text" class="form-control"  placeholder="Avenida Año de Juárez" id="Calle_Institucion" name="Calle_Institucion" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Exterior</b></label>
							<input type="number" min="0" max="10000" class="form-control"  placeholder="308" id="Numero_Ext_Institucion" name="Numero_Ext_Institucion" value="" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Interior</b></label>
							<input type="number" min="0" max="10000" class="form-control"  placeholder="0" id="Numero_Int_Institucion" name="Numero_Int_Institucion" value="" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:#ffffff";><b>Código Postal</b></label>
							<input type="text" class="form-control"  placeholder="09070" id="CodigoP_Institucion" name="CodigoP_Institucion" value="" required>
						</div>
					</div>
				</div>
				<button  type="submit" class="btn btn-success btn-fill pull-right pe-7s-culture">   Agregar Institución</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
<!-- Delegaciones -->
	<script src="../assets/js/state.js" type="text/javascript"></script>
</html>