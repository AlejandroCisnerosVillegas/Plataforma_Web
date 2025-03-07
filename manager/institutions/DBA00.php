<?php
	require '../database/instituciones/registrar.php';
?>
<?php
	require '../database/instituciones.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PiviWeb</title>
	<link rel="icon" type="image/png" href="../assets/img/logo.ico">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
<!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
<!-- Notificaciones CSS -->
  <link href="../assets/css/animate.min.css" rel="stylesheet"/>
<!-- Pagina Administrador CSS -->
	<link href="../assets/css/institutions.css" rel="stylesheet"/>
	<link href="../assets/css/managing.css" rel="stylesheet"/>
<!-- CSS de Estilos -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<!-- Barra de Navegacion Lateral -->
	<div class="wrapper">
		<div class="sidebar" data-color="blue" data-image="../assets/img/manager.jpg">
<!-- data-color="blue | azure | green | orange | red | purple" -->
			<div class="sidebar-wrapper">
				<div class="logo">
					<a class="simple-text">
						PiviWeb
					</a>
				</div>
				<ul class="nav">
					<li class="active">
						<a href="../institutions/">
							<i class="pe-7s-study"></i>
							<p>Instituciones</p>
						</a>
					</li>
					<li>
						<a href="../business/">
							<i class="pe-7s-portfolio"></i>
							<p>Empresas</p>
						</a>
					</li>
					<li>
						<a href="../contacts/">
							<i class="pe-7s-call"></i>
							<p>Contactos</p>
						</a>
					</li>
					<li>
						<a href="../manager/">
							<i class="pe-7s-user"></i>
							<p>Administrador</p>
						</a>
					</li>
					<li>
						<a href="../users/">
							<i class="pe-7s-id"></i>
							<p>Usuarios</p>
						</a>
					</li>
					<li>
						<a href="../vacancies/">
							<i class="pe-7s-display2"></i>
							<p>Vacantes</p>
						</a>
					</li>
					<li>
						<a href="../postulates/">
							<i class="pe-7s-users"></i>
							<p>Postulados</p>
						</a>
					</li>
					<li>
						<a href="../accepted/">
							<i class="pe-7s-add-user"></i>
							<p>Aceptados</p>
						</a>
					</li>
					<li>
						<a href="../rejected/">
							<i class="pe-7s-delete-user"></i>
							<p>Rechazados</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
<!-- Barra de Navegacion - Superior -->
		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
							<span class="sr-only">Barra de Navegación</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" style="color:#ffffff";>Instituciones</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" style="color:#ffffff";>
									<p style="cursor: pointer"> Cuenta Administrador <b class="caret"></b> </p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="../institutions/">Instituciones</a></li>
									<li><a href="../business/">Empresas</a></li>
									<li><a href="../contacts/">Contactos</a></li>
									<li class="divider"></li>
									<li><a href="../manager/">Administrador</a></li>
									<li><a href="../users/">Usuarios</a></li>
									<li><a href="../vacancies/">Vacantes</a></li>
									<li class="divider"></li>
									<li><a href="../postulates/">Postulados</a></li>
									<li><a href="../accepted/">Aceptados</a></li>
									<li><a href="../rejected/">Rechazados</a></li>
								</ul>
							</li>
							<li>
								<a href="../../index.html" style="color:#ffffff";>
									<p>Cerrar Sesión</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
					</div>
				</div>
			</nav>
<!-- Contenedor Principal -->
			<div class="content">
	 			<div class="container-fluid">
					<div class="col-md-12">
						<div class="card card-plain">
						<FONT SIZE=6><b>Registro de las Instituciones</b></font>
						<br></br>
<!-- Barra de Busqueda -->
							<div class="row">
								<div class="col-md-10">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Buscar en la Base de Datos ..." name="search" id="search">
									</div>
								</div>
							</div>
<!-- Boton de Registro -->
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-2">
										<button class="openBtn btn btn-primary">Registrar Nueva Institución</button>
										<br></br>
									</div>
								</div>
							</div>
<!-- Tabla de Base de Datos -->
							<div class="row table-responsive">
								<table class="table table-stripeder" id="employee_table">
									<thead>
										<tr>
											<th style="color:#000000";><FONT SIZE=3><b>Institución</b></font></th>
											<th style="color:#000000";><FONT SIZE=3><b>Nivel</b></font></th>
											<th style="color:#000000";><FONT SIZE=3><b>Dependencia</b></font></th>
											<th style="color:#000000";><FONT SIZE=3><b>Turno</b></font></th>
											<th style="color:#000000";><FONT SIZE=3><b>Estado</b></font></th>
											<th style="color:#000000";><FONT SIZE=3><b>Delegacion ó Alcaldía</b></font></th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
											<tr>
												<td><b><?php echo $row['Nombre_Institucion'] ?></b></td>
												<td><b><?php echo $row['Nivel_Institucion'] ?></b></td>
												<td><b><?php echo $row['Dependencia_Institucion'] ?></b></td>
												<td><b><?php echo $row['Turno_Institucion'] ?></b></td>
												<td><b><?php echo $row['Estado_Institucion'] ?></b></td>
												<td><b><?php echo $row['Delegacion_Institucion'] ?></b></td>
												<td style="cursor: pointer"><a data-id="<?php echo $row['IDInstitucion'] ?>" class="openBtn2"><span <i class="pe-7s-look"></i></span></a></td>
												<td style="cursor: pointer"><a data-id="<?php echo $row['IDInstitucion'] ?>" class="openBtn3"><span <i class="pe-7s-pen"></i></span></a></td>
												<td style="cursor: pointer"><a data-id="<?php echo $row['IDInstitucion'] ?>" class="openBtn4"><span <i class="pe-7s-trash"></i></span></a></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- Footer -->
			<footer class="footer">
				<div class="container-fluid">
					<p class="copyright pull-right">
						<a style="color:#ffffff";>COPYRIGHTS © 2019 - Sitio creado y hospedado en servicios digitales online.</a>
					</p>
				</div>
			</footer>
	  </div>
	</div>
</body>
<!-- Seccion de Modales -->
<div class="modal fade" id="register" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="login100-form-title" style="background-image: url(../assets/img/register.jpg);">
				<span class="login100-form-title-1">
					Registrar Nueva Institución
				</span>
			</div>
      <div class="modal-body" style="background-color: #182c39"></div>
      <div class="modal-footer" style="background-color: #1a1a20">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:#ffffff";>Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="login100-form-title" style="background-image: url(../assets/img/view.jpg);">
				<span class="login100-form-title-1">
					Datos de la Institución
				</span>
			</div>
      <div class="modal-body" style="background-color: #182c39"></div>
      <div class="modal-footer" style="background-color: #1a1a20">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:#ffffff";>Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modify" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="login100-form-title" style="background-image: url(../assets/img/modify.jpg);">
				<span class="login100-form-title-1">
					Modificar Datos de la Institución
				</span>
			</div>
      <div class="modal-body" style="background-color: #182c39"></div>
      <div class="modal-footer" style="background-color: #1a1a20">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:#ffffff";>Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="remove" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="login100-form-title" style="background-image: url(../assets/img/remove.jpg);">
				<span class="login100-form-title-1">
					¿Seguro que desea eliminar esta Institución?
				</span>
			</div>
      <div class="modal-body" style="background-color: #182c39"></div>
      <div class="modal-footer" style="background-color: #1a1a20">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:#ffffff";>Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- JavaScript Generales -->
  <script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- JavaScript de las Notificaciones -->
  <script src="../assets/js/bootstrap-notify.js"></script>
<!-- JavaScript del Administrador -->
	<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/demo.js"></script>
<!-- JavaScript del Buscador de la Tabla -->
	<script src="../assets/js/searcher.js"></script>
<!-- JavaScript de los Botones de Redireccionamiento -->
	<script src="../assets/js/modal-box.js"></script>
<!-- JavaScript de Notificacion -->
	<script src="../assets/js/register.js"></script>
</html>