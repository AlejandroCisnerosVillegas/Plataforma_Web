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
	<div class="header">
		<h4 class="title" style="color:#ffffff";>Datos del usuario postulado que fue aceptado</h4>
	</div>
	<div class="content">
		<form method="POST" action="DBA01" autocomplete="off">
			<input type="hidden" id="IDUPAceptados" name="IDUPAceptados" value="<?php echo $row['IDUPAceptados'] ?>" />
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label style="color:#ffffff";><b>Reporte sobre el estatus final del usuario</b></label>
						<textarea rows="5" class="form-control"  placeholder="Reporte sobre el estatus final del usuario" id="Reporte_UPAceptados" name="Reporte_UPAceptados" required value=""><?php echo $row['Reporte_UPAceptados'] ?></textarea>
					</div>
				</div>
			</div>
			<button  type="submit" class="btn btn-warning btn-fill pull-right pe-7s-pen">   Ingresar Reporte</button>
			<div class="clearfix"></div>
		</form>
	</div>
</body>
</html>