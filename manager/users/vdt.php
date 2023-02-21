<?php
	require '../database/usuarios/datos.php';
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
	<link href="../assets/css/users.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="card">
		<div class="header">
			<h4 class="title" style="color:#ffffff";>Datos del Usuario</h4>
		</div>
		<div class="content">
			<form method="POST" autocomplete="off">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Fecha en que se Registró el Usuario</b></label>
							<input disabled type="text" class="form-control"  placeholder="0000-00-00 00:00:00" id="Fecha_DUsuario" name="Fecha_DUsuario" value="<?php echo $row['Fecha_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre Completo</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Nombre del Usuario" id="Nombre_DUsuario" name="Nombre_DUsuario" value="<?php echo $row['Nombre_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<input type="hidden" id="id" name="id" value="<?php echo $row['Correo_DUsuario'] ?>" />
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Correo Electrónico</b></label>
							<input  type="email" disabled class="form-control"  placeholder="Ejemplo@dominio.com" id="Correo_DUsuario" name="Correo_DUsuario" value="<?php echo $row['Correo_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Contraseña</b></label>
							<input  type="text" disabled class="form-control"  placeholder="**************" id="Contrasena_Usuario" name="Contrasena_Usuario" value="<?php echo $row['Contrasena_Usuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
							<select id="primary"  disabled class="form-control" name="Ciudad_DUsuario">
								<option value="<?php echo $row['Ciudad_DUsuario'] ?>"><?php echo $row['Ciudad_DUsuario'] ?></option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Municipio / Delegación / Alcaldía</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Delegación ó Alcaldía" id="Minicipio_DUsuario" name="Minicipio_DUsuario" value="<?php echo $row['Minicipio_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Edad</b></label>
							<input  type="number" min="0" max="60" disabled class="form-control"  placeholder="Edad del Usuario" id="Edad_DUsuario" name="Edad_DUsuario" value="<?php echo $row['Edad_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Teléfono Celular</b></label>
							<input  type="text" disabled class="form-control"  placeholder="55-1234-5678" id="Telefono_DUsuario" name="Telefono_DUsuario" value="<?php echo $row['Telefono_DUsuario'] ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:#ffffff";><b>Nivel de Estudios</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Nivel de Estudios" id="Nivel_DUsuario" name="Nivel_DUsuario" value="<?php echo $row['Nivel_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carrera del Usuario</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Carrera del Usuario" id="Carrera_DUsuario" name="Carrera_DUsuario" value="<?php echo $row['Carrera_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Conocimientos Adquiridos</b></label>
							<textarea rows="5"  disabled class="form-control"  placeholder="Lista de Conocimientos Adquiridos" id="Conocimiento_DUsuario" name="Conocimiento_DUsuario" value=""><?php echo $row['Conocimiento_DUsuario'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Tipo de vacante que busca el usuario</b></label>
							<input  type="text" disabled class="form-control"  placeholder="Tipo de vacante que busca el usuario" id="TVacante_DUsuario" name="TVacante_DUsuario" value="<?php echo $row['TVacante_DUsuario'] ?>">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>