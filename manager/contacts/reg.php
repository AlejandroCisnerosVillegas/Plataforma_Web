<?php
	require '../database/conexion.php';
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
	<link href="../assets/css/contacts.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="card">
		<div class="header">
				<h4 class="title" style="color:#ffffff";>Datos del Contacto</h4>
		</div>
		<div class="content">
			<form method="POST" action="DBA00" autocomplete="on">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre Completo</b></label>
							<input type="text" class="form-control"  placeholder="Nombre del Contacto" id="Nombre_Contacto" name="Nombre_Contacto" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Nombre de Empresa o Institución</b></label>
							 <select id="primary" class="form-control" name="Emp_Inst_Contacto">
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
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Departamento / Área / Academia</b></label>
							<input type="text" class="form-control"  placeholder="Departamento o Área" id="Area_Contacto" name="Area_Contacto" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Teléfono de Oficina</b></label>
							<input type="text" class="form-control"  placeholder="308" id="Telefono_Contacto" name="Telefono_Contacto" value="" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label style="color:#ffffff";><b>Teléfono Celular</b></label>
							<input type="text" class="form-control"  placeholder="308" id="Celular_Contacto" name="Celular_Contacto" value="" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label style="color:#ffffff";><b>Correo Electrónico</b></label>
							<input type="email" class="form-control"  placeholder="ejemplo@dominio.com" id="Correo_Contacto" name="Correo_Contacto" value="" required>
						</div>
					</div>
				</div>
				<button  type="submit" class="btn btn-success btn-fill pull-right pe-7s-call">   Agregar Contacto</button>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</body>
</html>