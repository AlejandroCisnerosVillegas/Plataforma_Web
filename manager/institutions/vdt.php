<?php
	require '../database/instituciones/datos.php';
?>
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
			<form method="POST" autocomplete="off">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de la Institución</b></label>
							<input type="text" disabled class="form-control"  placeholder="Instituto Tecnológico de Iztapalapa" id="Nombre_Institucion" name="Nombre_Institucion" value="<?php echo $row['Nombre_Institucion'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Nivel</b></label>
							<select disabled class="form-control" id="Nivel_Institucion" name="Nivel_Institucion">
								<option value="<?php echo $row['Nivel_Institucion'] ?>"><?php echo $row['Nivel_Institucion'] ?></option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Dependencia</b></label>
							<select disabled class="form-control" id="Dependencia_Institucion" name="Dependencia_Institucion">
								<option value="<?php echo $row['Dependencia_Institucion'] ?>"><?php echo $row['Dependencia_Institucion'] ?></option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Turno</b></label>
							<select disabled class="form-control" id="Turno_Institucion" name="Turno_Institucion">
								<option value="<?php echo $row['Turno_Institucion'] ?>"><?php echo $row['Turno_Institucion'] ?></option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Clave</b></label>
							<input type="text" disabled class="form-control"  placeholder="TecNM03330" id="Clave_Institucione" name="Clave_Institucion" value="<?php echo $row['Clave_Institucion'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Plantel o Campus</b></label>
							<input type="text" disabled class="form-control"  placeholder="Nombre del plantel o campus" id="Nombre_Plantel" name="Nombre_Plantel" value="<?php echo $row['Nombre_Plantel'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carreras Ofertadas</b></label>
							<textarea rows="5" disabled class="form-control"  placeholder="Lista de Carreras Ofertadas" id="Carreras_Institucion" name="Carreras_Institucion" value=""><?php echo $row['Carreras_Institucion'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Medios de Contacto</b></label>
							<textarea rows="5" disabled class="form-control"  placeholder="Lista de Medios de Contacto" id="Medios_Institucion" name="Medios_Institucion" value=""><?php echo $row['Medios_Institucion'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Vacantes Disponibles</b></label>
							<textarea rows="5" disabled class="form-control"  placeholder="Lista de Vacantes Disponibles" id="Vacantes_Institucion" name="Vacantes_Institucion" value=""><?php echo $row['Vacantes_Institucion'] ?></textarea>
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
							<select id="Estado_Institucion" disabled class="form-control" name="Estado_Institucion">
								<option value="<?php echo $row['Estado_Institucion'] ?>"><?php echo $row['Estado_Institucion'] ?></option>
							</select>
						</div>
					</div>
					<input type="hidden" id="id" name="id" value="<?php echo $row['IDInstitucion'] ?>" />
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Municipio / Delegación / Alcaldía</b></label>
							<input type="text" disabled class="form-control"  placeholder="Delegación ó Alcaldía" id="Delegacion_Institucion" name="Delegacion_Institucion" value="<?php echo $row['Delegacion_Institucion'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Colonia / Pueblo</b></label>
							<input type="text" disabled class="form-control"  placeholder="Granjas San Antonio" id="Colonia_Institucion" name="Colonia_Institucion" value="<?php echo $row['Colonia_Institucion'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Calle / Avenida</b></label>
							<input type="text" disabled class="form-control"  placeholder="Avenida Año de Juárez" id="Calle_Institucion" name="Calle_Institucion" value="<?php echo $row['Calle_Institucion'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Exterior</b></label>
							<input type="number" min="0" max="10000" disabled class="form-control"  placeholder="Num. 308" id="Numero_Ext_Institucion" name="Numero_Ext_Institucion" value="<?php echo $row['Numero_Ext_Institucion'] ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Interior</b></label>
							<input type="number" min="0" max="10000" disabled class="form-control"  placeholder="No Asignado" id="Numero_Int_Institucion" name="Numero_Int_Institucion" value="<?php echo $row['Numero_Int_Institucion'] ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:#ffffff";><b>Código Postal</b></label>
							<input type="text" disabled class="form-control"  placeholder="09070" id="CodigoP_Institucion" name="CodigoP_Institucion" value="<?php echo $row['CodigoP_Institucion'] ?>">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>