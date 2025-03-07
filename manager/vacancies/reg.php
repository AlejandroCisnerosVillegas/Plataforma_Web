<?php
	require '../database/vacantes.php';
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
	<link href="../assets/css/vacancies.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="card">
		<div class="header">
			<h4 class="title" style="color:#ffffff";>Datos de la Vacante</h4>
		</div>
		<div class="content">
			<form method="POST" action="DBA00" autocomplete="on">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Título del Anuncio</b></label>
							<input  type="text" class="form-control"  placeholder="Título del Anuncio" id="Titulos_Vacantes" name="Titulos_Vacantes" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de Empresa o Institución</b></label>
							<select id="Emp_Inst_Vacantes"  class="form-control" name="Emp_Inst_Vacantes">
								<option value="No Asignado">-------Instituciones-------</option>
								<?php
								 $query = $mysqli -> query ("SELECT * FROM institucion ORDER BY Nombre_Institucion ASC");
								 while ($valores = mysqli_fetch_array($query)) {
								?>
									<option value="<?php echo $valores['Nombre_Institucion']; ?>"><?php echo $valores['Nombre_Institucion']; ?></option>
							    <?php
								}
								?>
								<option value="No Asignado">-------Empresas-------</option>
								<?php
								$query = $mysqli -> query ("SELECT * FROM empresa ORDER BY Nombre_Empresa ASC");
								while ($valores = mysqli_fetch_array($query)) {
								?>	
								    <option value="<?php echo $valores['Nombre_Empresa']; ?>"><?php echo $valores['Nombre_Empresa']; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Tipo de Vacante</b></label>
								<select id="tertiary"  class="form-control" name="Color_Vacantes">
									<option value="pivianuncio01">SS-PP-RP-B</option>
									<option value="pivianuncio05">Proyectos</option>
									<option value="pivianuncio06">Bolsa de Trabajo</option>
								</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Color</b></label>
								<select id="quaternary" class="form-control" name="Seccion_Vacantes"  readonly></select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
								<select id="primary"  class="form-control" name="Estado_Vacantes">
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
							<select id="secondary"  class="form-control" name="Delegacion_Vacantes"></select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Cargo Disponible</b></label>
							<input  type="text" class="form-control"  placeholder="Cargo Disponible" id="Cargo_Vacantes" name="Cargo_Vacantes" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Descripción de la Vacante</b></label>
							<textarea rows="5"  class="form-control"  placeholder="Descripción de la Vacante" id="Descripcion_Vacantes" name="Descripcion_Vacantes" value="" required></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carrera Solicitada</b></label>
							<input  type="text" class="form-control"  placeholder="Carrera Solicitada" id="Carrera_Vacantes" name="Carrera_Vacantes" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Conocimientos Requeridos</b></label>
							<textarea rows="5"  class="form-control"  placeholder="Conocimientos Requeridos" id="Conocimientos_Vacantes" name="Conocimientos_Vacantes" value="" required></textarea>
						</div>
					</div>
				</div>
				<button  type="submit" class="btn btn-success btn-fill pull-right pe-7s-news-paper">   Agregar Vacante</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
<!-- Delegaciones -->
	<script src="../assets/js/state.js" type="text/javascript"></script>
<!-- Vacantes -->
	<script src="../assets/js/vacancies.js" type="text/javascript"></script>
</html>