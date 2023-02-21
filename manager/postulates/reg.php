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
	<link href="../assets/css/postulates.css" rel="stylesheet"/>
  <link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
	<div class="header">
		<h4 class="title" style="color:#ffffff";>Datos de los Usuarios Postulados Rechazados</h4>
	</div>
	<div class="content">
		<form method="POST" action="DBA00" autocomplete="on">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<label style="color:#ffffff";><b>Nombre de usuario que desea re-postular</b></label>
						<select id="IDUPAceptados" class="form-control" name="IDUPAceptados">
							<?php
							$query = $mysqli -> query ("SELECT * FROM postulados_rechazados");
							while ($valores = mysqli_fetch_array($query)) {
							echo '<option value="'.$valores[IDUPAceptados].'">'.$valores[Nombre_DUsuario].' - '.$valores[Titulo_UPRechazados].'</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					<label style="color:#ffffff";><b>¿A qué vacante desea asignarlo?</b></label>
						<select id="Titulo_UPRechazados" class="form-control" name="Titulo_UPRechazados">
							<?php
							$query = $mysqli -> query ("SELECT * FROM vacante");
							while ($valores = mysqli_fetch_array($query)) {
							echo '<option value="'.$valores[Titulos_Vacantes].'">'.$valores[Titulos_Vacantes].'</option>';
							}
							?>
						</select>
					</div>
				</div>
			</div>
			<button  type="submit" class="btn btn-warning btn-fill pull-right pe-7s-info">   Repostular Usuario a la Vacante</button>
			<div class="clearfix"></div>
		</form>
	</div>
</body>
</html>