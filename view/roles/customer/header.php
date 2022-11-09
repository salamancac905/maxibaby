<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Información</title>
	<!-- Estilos -->
	<link rel="shortcut icon" href="http://maxibaby.com.co/wp-content/uploads/2018/05/Faviicon.png">
	<link rel="shortcut icon" href="assets/img/">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="assets/css/styles_dash.css">
	<link rel="stylesheet" href="assets/css/styles_pg.css">
</head>
<body>
	<div class="container">		
		<!-- Navegador -->
		<nav class="row sticky-top d-flex admin">
			<div class="logo col-lg-3 d-flex justify-content-center pt-3 border border-bottom-0">
				<img class="img-fluid" src="assets/img/logo-prueba.jpg" alt="">
			</div>
			<div class="col-lg-9 p-0">
				<div class="navbar navbar-expand-lg navbar-light">
					.<div id="btn-menu-lateral">
					</div>					
					<button class="navbar-toggler bg-black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon text-light"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link text-white" href="#"><span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link text-white ocul-navbar" href="?c=Dashboard">Inicio <span class="sr-only">(current)</span></a>
							</li>
						</ul>
						<ul class="navbar-nav">							
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="form/form_olvid.html" target="area_trabajo">Correo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="view/modules/5_others/calendario.php" target="area_trabajo">Calendario</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white ocul-navbar" href="https://www.online-toolz.com/langs/es/tool-es-notepad.html" >Actividades</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Administrador
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item ocul-navbar" href="?c=Users&a=read" target="area_trabajo">Configuración</a>
									<a class="dropdown-item ocul-navbar" href="?c=Logout">Cerrar Sesión</a>
								</div>
							</li>						
						</ul>						
					</div>
				</div>
			</div>
		</nav>
		<!-- Principal -->
		<section id="principal" class="row bg-light border">
			<!-- Panel lateral -->
			<aside id="panel-lateral" class="col-12 col-lg-3 p-0">
				<div class="logosena col-12 text-center p-0">
					<img id="img-ocul" class="p-3" src="assets/img/logo-usuar.png" alt="">
					<h6>Sesión Iniciada: Admin</h6>
				</div>
				<div id="modulos" class="modulos col-12 p-0">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header p-1 p-lg-0" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Gestión de Usuarios
									</button>
								</h2>
							</div>
							<!-- <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample"> -->
								<div class="card-body p-lg-1">
									<div class="card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Users&a=create" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Registrar Usuario</a>
											</li>
											<li class="list-group-item p-0 bg-light">
												<a href="?c=Users&a=read" target="area_trabajo" class="card-link d-block p-2 px-lg-3 py-lg-1 ocul-aside">Actualizar Usuario</a>
											</li>
										
										</ul>
									</div>
								</div>
							</div>
						</div>
					

			</aside>

			<!-- Área trabajo -->
			<main id="area_principal" src="Area_trabajo.php" class="col-12 col-lg-9 p-0 border d-flex"> 
				<!-- Contenedor -->
				<div class="body-pg container-fluid">  