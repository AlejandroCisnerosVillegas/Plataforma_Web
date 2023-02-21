<?php
	require 'aceptados.php';
?>
<?php
	require '../administrador/database/aceptados.php';
?>
<!-- ======================================================================================================== -->
<!doctype html>
<html lang="en">
<head>
<!-- Formato de la Pagina Web -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- ======================================================================================================== -->
<!-- Titulo del Sitio Web -->
	<title>PiviWeb</title>
<!-- ======================================================================================================== -->
<!-- Formato de la Pagina Web -->
	<link rel="icon" type="image/png" href="../../assets/img/logo.ico">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<!-- ======================================================================================================== -->
<!-- Bootstrap CSS -->
    <link href="../administrador/assets/css/bootstrap.css" rel="stylesheet" />
<!-- ======================================================================================================== -->
<!-- Notificaciones CSS -->
    <link href="../administrador/assets/css/animate.min.css" rel="stylesheet"/>
<!-- ======================================================================================================== -->
<!-- Pagina Administrador CSS -->
    <link href="../administrador/assets/css/administrador12.css" rel="stylesheet"/>
<!-- ======================================================================================================== -->
<!-- CSS Externo Estilos -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../administrador/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<body>
<!-- ======================================================================================================== -->
<!-- Barra de Navegacion lateral - Color -->
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../administrador/assets/img/administrado.jpg">
<!-- data-color="blue | azure | green | orange | red | purple" -->
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Barra de Navegacion -->
	<div class="sidebar-wrapper">
				<div class="logo">
						<a href="#" class="simple-text">
								PiviWeb
						</a>
				</div>
				<ul class="nav">
					<li>
							<a href="../administrador/instituciones.php">
									<i class="pe-7s-server"></i>
									<p>Instituciones</p>
							</a>
					</li>
					<li>
							<a href="../administrador/empresas.php">
									<i class="pe-7s-server"></i>
									<p>Empresas</p>
							</a>
					</li>
					<li>
							<a href="../administrador/contactos.php">
									<i class="pe-7s-call"></i>
									<p>Contactos</p>
							</a>
					</li>
					<li>
							<a href="../administrador/administrador.php">
									<i class="pe-7s-user"></i>
									<p>Administrador</p>
							</a>
					</li>
					<li>
							<a href="../administrador/usuarios.php">
									<i class="pe-7s-id"></i>
									<p>Usuarios</p>
							</a>
					</li>
					<li>
							<a href="../administrador/vacantes.php">
									<i class="pe-7s-display2"></i>
									<p>Vacantes</p>
							</a>
					</li>
					<li>
							<a href="../administrador/postulados.php">
									<i class="pe-7s-users"></i>
									<p>Postulados</p>
							</a>
					</li>
					<li class="active">
							<a href="../administrador/aceptados.php">
									<i class="pe-7s-add-user"></i>
									<p>Aceptados</p>
							</a>
					</li>
					<li>
							<a href="../administrador/rechazados.php">
									<i class="pe-7s-delete-user"></i>
									<p>Rechazados</p>
							</a>
					</li>
				</ul>
	</div>
	</div>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Contenedor General -->
<div class="main-panel">
<nav class="navbar navbar-default navbar-fixed">
<!-- Barra de Navegacion - Superior -->
				<div class="container-fluid">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#" style="color:#ffffff";>Usuarios postulados que fueron aceptados</a>
						</div>
						<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#ffffff";>
																<p> Cuenta Administrador <b class="caret"></b> </p>
													</a>
													<ul class="dropdown-menu">
														<li><a href="../administrador/instituciones.php">Instituciones</a></li>
														<li><a href="../administrador/empresas.php">Empresas</a></li>
														<li><a href="../administrador/contactos.php">Contactos</a></li>
														<li class="divider"></li>
														<li><a href="../administrador/administrador.php">Administrador</a></li>
														<li><a href="../administrador/usuarios.php">Usuarios</a></li>
														<li><a href="../administrador/vacantes.php">Vacantes</a></li>
														<li class="divider"></li>
														<li><a href="../administrador/postulados.php">Postulados</a></li>
														<li><a href="../administrador/aceptados.php">Aceptados</a></li>
														<li><a href="../administrador/rechazados.php">Rechazados</a></li>
													</ul>
										</li>
										<li>
												<a href="../index.html" style="color:#ffffff";>
														<p>Cerrar Sesión</p>
												</a>
										</li>
				<li class="separator hidden-lg hidden-md"></li>
								</ul>
						</div>
				</div>
		</nav>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Contenedor de Formularios -->
				<div class="content">
				    <div class="container-fluid">
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
	<div class="col-md-12">
			<div class="card card-plain">
				<FONT SIZE=6><b>Registro de los usuarios postulados que fueron aceptados</b></font>
					<br></br>
					<div class="row">
<!-- ======================================================================================================== -->
<!-- Barra de Busqueda -->
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Buscar en la Base de Datos ..." name="search" id="search">
							</div>
						</div>
<!-- ======================================================================================================== -->
<!-- Tabla de la Base de Datos -->
					</div>
					<div class="row table-responsive">
						<table class="table table-stripeder" id="employee_table">
							<thead>
								<tr>
								<th style="color:#000000";><FONT SIZE=2><b>Título de la Vacante</b></font></th>
								<th style="color:#000000";><FONT SIZE=2><b>Nombre del Usuario</b></font></th>
								<th style="color:#000000";><FONT SIZE=2><b>Carrera</b></font></th>
								<th style="color:#000000";><FONT SIZE=2><b>Estado</b></font></th>
								<th style="color:#000000";><FONT SIZE=2><b>Delegacion ó Alcaldía</b></font></th>
								</tr>
							</thead>
							<tbody>
								<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
									<tr>
										<td><b><?php echo $row['Titulo_UPAceptados'] ?></b></td>
										<td><b><?php echo $row['Nombre_DUsuario'] ?></b></td>
										<td><b><?php echo $row['Carrera_DUsuario'] ?></b></td>
										<td><b><?php echo $row['Ciudad_DUsuario'] ?></b></td>
										<td><b><?php echo $row['Minicipio_DUsuario'] ?></b></td>
                    <td><a href="../administrador/registros/aceptados/vista.php?id=<?php echo $row['IDUPAceptados'] ?>"><span <i class="pe-7s-look"></i></span></a></td>
                    <td><a href="vista.php?id=<?php echo $row['Direccion_UPAceptados'] ?>"><span <i class="pe-7s-news-paper"></i></span></a></td>
										<td><a href="../administrador/registros/aceptados/modificar.php?id=<?php echo $row['IDUPAceptados'] ?>"><span <i class="pe-7s-note"></i></span></a></td>
										<td><a href="../administrador/registros/aceptados/eliminar.php?id=<?php echo $row['IDUPAceptados'] ?>"><span <i class="pe-7s-trash"></i></span></a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
			</div>
	</div>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Formulario General -->
		<div class="col-md-12">
				<div class="card">
						<div class="header">
								<h4 class="title" style="color:#ffffff";>Datos del usuario postulado que fue aceptado</h4>
						</div>
						<div class="content">
							<form method="POST" action="instituciones_aceptado.php" autocomplete="off" name="formulario1">
<!-- ======================================================================================================== -->
				<input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>" />
<!-- ======================================================================================================== -->
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-6">
												<div class="form-group">
														<label style="color:#ffffff";><b>Título de la Vacante</b></label>
														<input disabled type="text" class="form-control"  placeholder="Título de la Vacante" id="titulo" name="titulo" value="">
												</div>
										</div>
<!-- ======================================================================================================== -->
										<div class="col-md-6">
											<div class="form-group">
													<label style="color:#ffffff";><b>Nombre de la Empresa o Institución</b></label>
													<input disabled type="text" class="form-control"  placeholder="Nombre de la Empresa o Institución" id="Emp_Inst_Vacantes" name="Emp_Inst_Vacantes" value="">
											</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-6">
												<div class="form-group">
														<label style="color:#ffffff";><b>Nombre del Usuario Postulado</b></label>
														<input disabled type="text" class="form-control"  placeholder="Nombre del Usuario Postulado" id="Nombre_DUsuario" name="Nombre_DUsuario" value="">
												</div>
										</div>
<!-- ======================================================================================================== -->
										<div class="col-md-6">
											<div class="form-group">
													<label style="color:#ffffff";><b>Edad</b></label>
													<input disabled type="text" class="form-control"  placeholder="Edad" id="Edad_DUsuario" name="Edad_DUsuario" value="">
											</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-6">
												<div class="form-group">
														<label style="color:#ffffff";><b>Ciudad o Estado</b></label>
														<input disabled type="text" class="form-control"  placeholder="Ciudad o Estado" id="Ciudad_DUsuario" name="Ciudad_DUsuario" value="">
												</div>
										</div>
<!-- ======================================================================================================== -->
										<div class="col-md-6">
											<div class="form-group">
													<label style="color:#ffffff";><b>Delegación o Alcaldía</b></label>
													<input disabled type="text" class="form-control"  placeholder="Delegación o Alcaldía" id="Minicipio_DUsuario" name="Minicipio_DUsuario" value="">
											</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-6">
												<div class="form-group">
														<label style="color:#ffffff";><b>Correo Electrónico</b></label>
														<input disabled type="text" class="form-control"  placeholder="Correo Electrónico" id="correo" name="correo" value="">
												</div>
										</div>
<!-- ======================================================================================================== -->
										<div class="col-md-6">
											<div class="form-group">
													<label style="color:#ffffff";><b>Teléfono Celular</b></label>
													<input disabled type="text" class="form-control"  placeholder="Teléfono Celular" id="Telefono_DUsuario" name="Telefono_DUsuario" value="">
											</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-6">
												<div class="form-group">
														<label style="color:#ffffff";><b>Nivel de Estudios</b></label>
														<input disabled type="text" class="form-control"  placeholder="Nivel de Estudios" id="Nivel_DUsuario" name="Nivel_DUsuario" value="">
												</div>
										</div>
<!-- ======================================================================================================== -->
										<div class="col-md-6">
											<div class="form-group">
													<label style="color:#ffffff";><b>Carrera</b></label>
													<input disabled type="text" class="form-control"  placeholder="Carrera" id="Carrera_DUsuario" name="Carrera_DUsuario" value="">
											</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
								<div class="row">
<!-- ======================================================================================================== -->
										<div class="col-md-12">
												<div class="form-group">
														<label style="color:#ffffff";><b>Conocimientos Adquiridos</b></label>
														<textarea rows="5" disabled class="form-control"  placeholder="Lista de Conocimientos Adquiridos" id="Conocimiento_DUsuario" name="Conocimiento_DUsuario" value=""></textarea>
												</div>
										</div>
<!-- ======================================================================================================== -->
								</div>
									<div class="clearfix"></div>
								</form>
							</div>
					</div>
		</div>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Cierre de Contenedor de Formularios -->
		</div>
	</div>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Footer -->
	<footer class="footer">
			<div class="container-fluid">
					<p class="copyright pull-right">
							<a style="color:#ffffff";>COPYRIGHTS © 2019 - Sitio creado y hospedado en servicios digitales online.</a>
					</p>
			</div>
	</footer>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- Cierre de Contenedor General -->
	  </div>
	</div>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
</body>
<!-- ======================================================================================================== -->
<!-- ======================================================================================================== -->
<!-- JavaScript Generales -->
    <script src="../administrador/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../administrador/assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript de los Plugins Usados -->
	<script src="../administrador/assets/js/chartist.min.js"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript de las Notificaciones -->
    <script src="../administrador/assets/js/bootstrap-notify.js"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript de Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript del Administrador -->
	<script src="../administrador/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript del Administrador -->
	<script src="../administrador/assets/js/demo.js"></script>
<!-- ======================================================================================================== -->
<!-- JavaScript del Buscador de la Tabla -->
	<script>
			 $(document).ready(function(){
						$('#search').keyup(function(){
								 search_table($(this).val());
						});
						function search_table(value){
								 $('#employee_table tr').each(function(){
											var found = 'false';
											$(this).each(function(){
													 if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
													 {
																found = 'true';
													 }
											});
											if(found == 'true')
											{
													 $(this).show();
											}
											else
											{
													 $(this).hide();
											}
								 });
						}
			 });
	</script>
<!-- ======================================================================================================== -->
<!-- JavaScript de Notificacion -->
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-info',
            	message: "El registro se ha eliminado con éxito."

            },{
                type: 'danger',
                timer: 4000
            });

    	});
	</script>
<!-- ======================================================================================================== -->
</html>
<?php
mysql_free_result($mysqli);
mysql_close($mysqli);
?>