<?php
	require '../database/administrador/datos.php';
?>
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
<!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
<!-- Pagina Administrador CSS -->
	<link href="../assets/css/manager.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="card">
	<div class="header">
		<h4 class="title" style="color:#ffffff";>Datos del Administrador</h4>
	</div>
	<div class="content">
		<form method="POST" action="DBA01" autocomplete="on">
		<input type="hidden" id="id" name="id" value="<?php echo $row['IDUsuario'] ?>" />
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label style="color:#ffffff";><b>Correo Electrónico</b></label>
						<input type="email" class="form-control"  placeholder="Ejemplo@dominio.com" id="Correo_Usuario" name="Correo_Usuario" value="<?php echo $row['Correo_Usuario'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label style="color:#ffffff";><b>Contraseña</b></label>
						<input type="text" class="form-control"  placeholder="**************" id="Contrasena_Usuario" name="Contrasena_Usuario" value="<?php echo $row['Contrasena_Usuario'] ?>" required>
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