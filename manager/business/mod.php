<?php
	require '../database/empresas/datos.php';
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
	<link href="../assets/css/business.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<!-- Formulario General -->
	<div class="card">
		<div class="header">
				<h4 class="title" style="color:#ffffff";>Datos de la Empresa</h4>
		</div>
		<div class="content">
			<form method="POST" action="DBA01" autocomplete="on">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de la Empresa</b></label>
							<input  type="text" class="form-control"  placeholder="Nombre de la Empresa" id="Nombre_Empresa" name="Nombre_Empresa" value="<?php echo $row['Nombre_Empresa'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Registro Federal de Contribuyentes</b></label>
							<input  type="text" class="form-control"  placeholder="CPS170828C64" id="RFC_Empresa" name="RFC_Empresa" value="<?php echo $row['RFC_Empresa'] ?>" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Giro de la Empresa</b></label>
							<input  type="text" class="form-control"  placeholder="Actividad o Negocio que desarrolla la Empresa." id="Giro_Empresa" name="Giro_Empresa" value="<?php echo $row['Giro_Empresa'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Medios de Contacto</b></label>
							<textarea rows="5"  class="form-control"  placeholder="Lista de Medios de Contacto" id="Medios_Empresa" name="Medios_Empresa" required value="<?php echo $row['Medios_Empresa'] ?>"><?php echo $row['Medios_Empresa'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Vacantes Disponibles</b></label>
							<textarea rows="5"  class="form-control"  placeholder="Lista de Vacantes Disponibles" id="Vacantes_Empresa" name="Vacantes_Empresa" required value="<?php echo $row['Vacantes_Empresa'] ?>"><?php echo $row['Vacantes_Empresa'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Oficinas Externas</b></label>
							<textarea rows="3"  class="form-control"  placeholder="Oficinas Externas" id="Oficinas_Empresa" name="Oficinas_Empresa" required value="<?php echo $row['Oficinas_Empresa'] ?>"><?php echo $row['Oficinas_Empresa'] ?></textarea>
						</div>
					</div>
				</div>
				<div class="header">
					<h4 class="title" style="color:#ffffff";>Ubicación de la Empresa</h4>
					<br></br>
				</div>
				<input type="hidden" id="id" name="id" value="<?php echo $row['IDEmpresa'] ?>" />
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Ciudad / Estado</b></label>
							<select id="primary"  class="form-control" name="Estado_Empresa">
								<option value="<?php echo $row['Estado_Empresa'] ?>"><?php echo $row['Estado_Empresa'] ?></option>
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
							<input  type="text" class="form-control"  placeholder="Iztapalapa" id="Delegacion_Empresa" name="Delegacion_Empresa" value="<?php echo $row['Delegacion_Empresa'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Colonia / Pueblo</b></label>
							<input  type="text" class="form-control"  placeholder="Granjas San Antonio" id="Colonia_Empresa" name="Colonia_Empresa" value="<?php echo $row['Colonia_Empresa'] ?>" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Calle / Avenida</b></label>
							<input  type="text" class="form-control"  placeholder="Avenida Año de Juárez" id="Calle_Empresa" name="Calle_Empresa" value="<?php echo $row['Calle_Empresa'] ?>" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Exterior</b></label>
							<input  type="number" min="0" max="10000" class="form-control"  placeholder="308" id="Numero_Ext_Empresa" name="Numero_Ext_Empresa" value="<?php echo $row['Numero_Ext_Empresa'] ?>" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label style="color:#ffffff";><b>Numero Interior</b></label>
							<input  type="number" min="0" max="10000" class="form-control"  placeholder="0" id="Numero_Int_Empresa" name="Numero_Int_Empresa" value="<?php echo $row['Numero_Int_Empresa'] ?>" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:#ffffff";><b>Código Postal</b></label>
							<input  type="text" class="form-control"  placeholder="09070" id="CodigoP_Empresa" name="CodigoP_Empresa" value="<?php echo $row['CodigoP_Empresa'] ?>" required>
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