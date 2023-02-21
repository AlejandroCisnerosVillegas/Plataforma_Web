<?php
	require '../database/aceptados/datos.php';
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
	<link href="../assets/css/accepted.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="card">
		<div class="header">
			<h4 class="title" style="color:#ffffff";>Datos del usuario postulado que fue aceptado</h4>
		</div>
		<div class="content">
			<form method="POST" autocomplete="off">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Fecha en que se postuló el usuario</b></label>
							<input disabled type="text" class="form-control"  placeholder="Fecha en que se postuló el usuario" id="Fecha_UPAceptados" name="Fecha_UPAceptados" value="<?php echo $row['Fecha_UPAceptados'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Tipo de vacante que busca el usuario</b></label>
							<input disabled type="text" class="form-control"  placeholder="Tipo de vacante que busca el usuario" id="TVacante_DUsuario" name="TVacante_DUsuario" value="<?php echo $row['TVacante_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<input type="hidden" id="IDUPAceptados" name="IDUPAceptados" value="<?php echo $row['IDUPAceptados'] ?>" />
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Título de la Vacante</b></label>
							<input disabled type="text" class="form-control"  placeholder="Título de la Vacante" id="Titulo_UPAceptados" name="Titulo_UPAceptados" value="<?php echo $row['Titulo_UPAceptados'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de la Empresa o Institución</b></label>
							<input disabled type="text" class="form-control"  placeholder="Nombre de la Empresa o Institución" id="Emp_Inst_Vacantes" name="Emp_Inst_Vacantes" value="<?php echo $row['Emp_Inst_Vacantes'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre del Usuario Postulado</b></label>
							<input disabled type="text" class="form-control"  placeholder="Nombre del Usuario Postulado" id="Nombre_DUsuario" name="Nombre_DUsuario" value="<?php echo $row['Nombre_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Edad</b></label>
							<input disabled type="text" class="form-control"  placeholder="Edad" id="Edad_DUsuario" name="Edad_DUsuario" value="<?php echo $row['Edad_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Ciudad o Estado</b></label>
							<input disabled type="text" class="form-control"  placeholder="Ciudad o Estado" id="Ciudad_DUsuario" name="Ciudad_DUsuario" value="<?php echo $row['Ciudad_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Delegación o Alcaldía</b></label>
							<input disabled type="text" class="form-control"  placeholder="Delegación o Alcaldía" id="Minicipio_DUsuario" name="Minicipio_DUsuario" value="<?php echo $row['Minicipio_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Correo Electrónico</b></label>
							<input disabled type="text" class="form-control"  placeholder="Correo Electrónico" id="Correo_UPAceptados" name="Correo_UPAceptados" value="<?php echo $row['Correo_UPAceptados'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Teléfono Celular</b></label>
							<input disabled type="text" class="form-control"  placeholder="Teléfono Celular" id="Telefono_DUsuario" name="Telefono_DUsuario" value="<?php echo $row['Telefono_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nivel de Estudios</b></label>
							<input disabled type="text" class="form-control"  placeholder="Nivel de Estudios" id="Nivel_DUsuario" name="Nivel_DUsuario" value="<?php echo $row['Nivel_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carrera</b></label>
							<input disabled type="text" class="form-control"  placeholder="Carrera" id="Carrera_DUsuario" name="Carrera_DUsuario" value="<?php echo $row['Carrera_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Conocimientos Adquiridos</b></label>
							<textarea rows="5" disabled class="form-control"  placeholder="Lista de Conocimientos Adquiridos" id="Conocimiento_DUsuario" name="Conocimiento_DUsuario" value=""><?php echo $row['Conocimiento_DUsuario'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Reporte sobre el estatus final del usuario</b></label>
							<textarea rows="5" disabled class="form-control"  placeholder="Reporte sobre el estatus final del usuario" id="Reporte_UPAceptados" name="Reporte_UPAceptados" value=""><?php echo $row['Reporte_UPAceptados'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>