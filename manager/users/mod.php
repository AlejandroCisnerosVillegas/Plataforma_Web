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
			<form method="POST" action="DBA01" autocomplete="on">
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
							<input  type="text" class="form-control"  placeholder="Nombre del Usuario" id="Nombre_DUsuario" name="Nombre_DUsuario" value="<?php echo $row['Nombre_DUsuario'] ?>" required>
						</div>
					</div>
				</div>
				<input type="hidden" id="id" name="id" value="<?php echo $row['Correo_DUsuario'] ?>" />
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Correo Electrónico</b></label>
							<input  type="email" class="form-control"  placeholder="Ejemplo@dominio.com" id="Correo_DUsuario" name="Correo_DUsuario" value="<?php echo $row['Correo_DUsuario'] ?>" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Contraseña</b></label>
							<input  type="text" class="form-control"  placeholder="**************" id="Contrasena_Usuario" name="Contrasena_Usuario" value="<?php echo $row['Contrasena_Usuario'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
							<select id="primary"  class="form-control" name="Ciudad_DUsuario">
								<option value="<?php echo $row['Ciudad_DUsuario'] ?>"><?php echo $row['Ciudad_DUsuario'] ?></option>
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
							 <input  type="text" class="form-control"  placeholder="Delegación ó Alcaldía" id="Minicipio_DUsuario" name="Minicipio_DUsuario" value="<?php echo $row['Minicipio_DUsuario'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Edad</b></label>
							<input  type="number" min="0" max="60" class="form-control"  placeholder="Edad del Usuario" id="Edad_DUsuario" name="Edad_DUsuario" value="<?php echo $row['Edad_DUsuario'] ?>" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Teléfono Celular</b></label>
							<input  type="text" class="form-control"  placeholder="55-1234-5678" id="Telefono_DUsuario" name="Telefono_DUsuario" value="<?php echo $row['Telefono_DUsuario'] ?>" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:#ffffff";><b>Nivel de Estudios</b></label>
							<input  type="text" class="form-control"  placeholder="Nivel de Estudios" id="Nivel_DUsuario" name="Nivel_DUsuario" value="<?php echo $row['Nivel_DUsuario'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Carrera del Usuario</b></label>
							<input  type="text" class="form-control"  placeholder="Carrera del Usuario" id="Carrera_DUsuario" name="Carrera_DUsuario" value="<?php echo $row['Carrera_DUsuario'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Conocimientos Adquiridos</b></label>
							<textarea rows="5"  class="form-control"  placeholder="Lista de Conocimientos Adquiridos" id="Conocimiento_DUsuario" name="Conocimiento_DUsuario" value="" required><?php echo $row['Conocimiento_DUsuario'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Tipo de vacante que busca el usuario</b></label>
							<input  type="text" class="form-control"  placeholder="Tipo de vacante que busca el usuario" id="TVacante_DUsuario" name="TVacante_DUsuario" value="<?php echo $row['TVacante_DUsuario'] ?>" required>
						</div>
					</div>
				</div>
				<button  type="submit" class="btn btn-warning btn-fill pull-right pe-7s-pen">   Modificar Registro</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>