<?php
	require '../database/inhabilitados/datos.php';
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
	<link href="../assets/css/disabled.css" rel="stylesheet"/>
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
			<form method="POST" autocomplete="off">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Ultima fecha en que se ingresó al registro </b></label>
							<input  type="text" disabled class="form-control" id="Tiempo_Vacantes" name="Tiempo_Vacantes" value="<?php echo $row['Tiempo_Vacantes'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Título del Anuncio</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Título del Anuncio" id="Titulos_Vacantes" name="Titulos_Vacantes" value="<?php echo $row['Titulos_Vacantes'] ?>">
						</div>
					</div>
				</div>
				<input type="hidden" id="id" name="id" value="<?php echo $row['IDVacantes'] ?>" />
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						<label style="color:#ffffff";><b>Nombre de Empresa o Institución</b></label>
							<select id="Emp_Inst_Vacantes" disabled class="form-control" name="Emp_Inst_Vacantes">
								<option value="<?php echo $row['Emp_Inst_Vacantes'] ?>"><?php echo $row['Emp_Inst_Vacantes'] ?></option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Tipo de Vacante</b></label>
							<select id="tertiary"  disabled class="form-control" name="Color_Vacantes">
								<option value="<?php echo $row['Color_Vacantes'] ?>"><?php echo $row['Seccion_Vacantes'] ?></option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Color</b></label>
							<select id="quaternary" disabled class="form-control" name="Seccion_Vacantes"  readonly>
								<option value="<?php echo $row['Seccion_Vacantes'] ?>"><?php echo $row['Seccion_Vacantes'] ?></option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
							<select id="primary"  disabled class="form-control" name="Estado_Vacantes">
								<option value="<?php echo $row['Estado_Vacantes'] ?>"><?php echo $row['Estado_Vacantes'] ?></option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Municipio / Delegación / Alcaldía</b></label>
								<select id="secondary"  disabled class="form-control" name="Delegacion_Vacantes">
									<option value="<?php echo $row['Delegacion_Vacantes'] ?>"><?php echo $row['Delegacion_Vacantes'] ?></option>
								</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Cargo Disponible</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Cargo Disponible" id="Cargo_Vacantes" name="Cargo_Vacantes" value="<?php echo $row['Cargo_Vacantes'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Descripción de la Vacante</b></label>
							<textarea rows="5"  disabled class="form-control"  placeholder="Descripción de la Vacante" id="Descripcion_Vacantes" name="Descripcion_Vacantes" value=""><?php echo $row['Descripcion_Vacantes'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carrera Solicitada</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Carrera Solicitada" id="Carrera_Vacantes" name="Carrera_Vacantes" value="<?php echo $row['Carrera_Vacantes'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Conocimientos Requeridos</b></label>
							<textarea rows="5"  disabled class="form-control"  placeholder="Conocimientos Requeridos" id="Conocimientos_Vacantes" name="Conocimientos_Vacantes" value=""><?php echo $row['Conocimientos_Vacantes'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>