<?php

require_once(__DIR__ . "/../controllers/actionchart/data.php");
if (!isset($_SESSION['ID_USUARIO'])) {
	// Redirige a login.php después de 2 segundos
	echo '<script>
        setTimeout(function() {
            window.location = "login.php";
        }, 2000);
    </script>';
	exit; // Asegura que no se procese más código PHP
}

if ($_SESSION["ID_ROL"] === 2) {
	// Redirige a index.php después de 2 segundos
	echo '<script>
		setTimeout(function () {
			window.location = "menu.php";
		}, 2000);
	</script>';
	exit; // Asegura que no se procese más código PHP
}
if ($_SESSION["ID_ROL"] === 3) {
	// Redirige a index.php después de 2 segundos
	echo '<script>
		setTimeout(function () {
			window.location = "menu.php";
		}, 2000);
	</script>';
	exit; // Asegura que no se procese más código PHP
}
if ($_SESSION["ID_ROL"] === 4) {
	// Redirige a index.php después de 2 segundos
	echo '<script>
		setTimeout(function () {
			window.location = "menu.php";
		}, 2000);
	</script>';
	exit; // Asegura que no se procese más código PHP
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!----======== CSS ======== -->
	<link rel="stylesheet" href="css/side-bar.css">
	<link rel="stylesheet" href="css/admin.css">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" referrerpolicy="no-referrer" />
	<!----===== Iconscout CSS ===== -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="css/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<title>Admin Dashboard Panel</title>
</head>

<body id="body-pd">

	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

	<main id="main-content">
		<nav>
			<div>
				<div class="l-navbar" id="navbar">
					<nav class="nav">
						<div>
							<div class="nav__brand">
								<ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
								<a href="#" class="nav__logo">TUTOMARKET</a>
							</div>
							<div class="nav__list">
								<a href="#" class="nav__link ">
									<ion-icon name="home-outline" class="nav__icon"></ion-icon>
									<span class="nav__name">Inicio </span>
								</a>
								<a href="#" class="nav__link active" id="user-nav">
									<i class='bx bx-user-circle'></i>
									<span class="nav__name">Usuarios</span>
								</a>

								<div class="nav__link" id="group-nav">
									<i class='bx bxs-group'></i>
									<span class="nav__name">Grupos</span>
								</div>

								<a href="#" class="nav__link" id="arti-nav">
									<i class='bx bx-cart-add'></i>
									<span class="nav__name">Articulos</span>
								</a>
								
								<a href="#" class="nav__link" id="config-nav">
									<ion-icon name="settings-outline" class="nav__icon"></ion-icon>
									<span class="nav__name">Configuración</span>
								</a>
							</div>
						</div>
						<a href="#" class="nav__link">
							<ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
							<span class="nav__name">Log Out</span>
						</a>
					</nav>
				</div>
			</div>
		</nav>

		<section id="9" class="dashboard">

			<div class="row nav-bar colornav">
				<div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
				</div>

				<div class="col-md-5 col-lg-3 order-3 order-md-2">
					<div class="xp-searchbar">
						<form>
							<div class="input-group">
								<input type="search" class="form-control" placeholder="Search">
								<div class="input-group-append">
									<button class="btn" type="submit" id="button-addon2">Go
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>


				<div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					<div class="xp-profilebar text-right">
						<nav class="navbar p-0">
							<ul class="nav navbar-nav flex-row ml-auto">
								<li class="dropdown nav-item active">
									<a class="nav-link" href="#" data-toggle="dropdown">
										<span class="material-icons"><i class='bx bxs-bell'></i></span>
										<span class="notification">4</span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">You Have 4 New Messages</a></li>
										<li><a href="#">You Have 4 New Messages</a></li>
										<li><a href="#">You Have 4 New Messages</a></li>
										<li><a href="#">You Have 4 New Messages</a></li>
									</ul>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#">
										<span class="material-icons"><i class='bx bxs-conversation'></i></span>
									</a>
								</li>

								<li class="dropdown nav-item">
									<a class="nav-link" href="#" data-toggle="dropdown">
										<img src="/assets/img/chef1.png" style="width:40px; border-radius:50%;" />
										<span class="xp-user-live"></span>
									</a>
									<ul class="dropdown-menu small-menu">
										<li><a href="#">
												<span class="material-icons">person_outline</span>
												Profile
											</a></li>
										<li><a href="#">
												<span class="material-icons">settings</span>
												Settings
											</a></li>
										<li><a href="#">
												<span class="material-icons">logout</span>
												Logout
											</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>


			<div class="dash-content">
				<section class="overview hide" id="over">
					<div class="title">
						<i class="uil uil-tachometer-fast-alt"></i>
						<span class="text">Dashboard</span>
					</div>

					<div class="boxes">
						<div class="card">
							<p class="cookieHeading">Total Estudiantes</p>
							<p class="cookieDescription"><span class="number"><?php echo $_SESSION["#Estu"]; ?></span></p>
						</div>
						<div class="card">
							<p class="cookieHeading">Total Vendedores</p>
							<p class="cookieDescription"><span class="number"><?php echo $_SESSION["#Cali"]; ?></span></p>
						</div>
						<div class="card">
							<p class="cookieHeading">Total Monitores</p>
							<p class="cookieDescription"><span class="number"><?php echo $_SESSION["#Dona"]; ?></span></p>
						</div>
					</div>
				</section>
				<section id="Usuarios" class="hide">
					<div class="activity">
						<div class="title">
							<i class='bx bxs-user-circle'></i>
							<span class="text">Usuarios</span>
							<!-- Button trigger modal -->
							<div class="container-fluid">
								<div class="justify-content-center row">
									<button type="button" class="btn acceptButton" data-toggle="modal" data-target="#modalCrearUsuario">
										Crear usuario
									</button>
								</div>
							</div>
						</div>
						<table class="activity-data table" id="usuariosRegistrados">
							<thead class="table">
								<tr>
									<th class="data-title" scope="col">Id</th>
									<th class="data-title" scope="col">Nombres</th>
									<th class="data-title" scope="col">Apellidos</th>
									<th class="data-title" scope="col">Email</th>
									<th class="data-title" scope="col">Codigo</th>
									<th class="data-title" scope="col">Celular</th>
									<th class="data-title" scope="col">Programa</th>
									<th class="data-title" scope="col">Rol</th>
									<th class="data-title" scope="col">Estado</th>
									<th class="data-title" scope="col">Biografia</th>
									<th class="data-title" scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody class="data">

							</tbody>
						</table>
					</div>

					<!-- Modal CREAR USUARIO -->
					<div class="modal fade" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="/../controllers/actionadmin/registrarUsuario.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="ID usuario" type="text" class="form-control" name="IdUsuario" readonly>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Nombres" type="text" class="form-control" name="nombres">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Apellidos" type="text" class="form-control" name="apellidos">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Email" type="email" class="form-control" name="email"></div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Codigo estudiantil" type="number" class="form-control" name="codigo">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Celular" type="number" class="form-control" name="celular">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Biografia" type="text" class="form-control" name="biografia">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class="programaSelect form-control" name="programa">
														<option disabled selected>Programa</option>
													</select>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class=" form-control" name="rol">
														<option disabled selected>Elegir rol</option>
														<option value="1">Administrador</option>
														<option value="2">Estudiante</option>
														<option value="3">Vendedor</option>
														<option value="4">Monitor</option>
													</select>
												</div>
											</div>
											<input hidden type="number" class="form-control" name="idUsuario">
											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end modal -->

					<!-- Modal EDITAR USUARIO-->
					<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ModalEditarLabel">Editar usuario</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form id="formEditarUsuario" action="/../controllers/actionadmin/editarUsuario.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="ID usuario" type="text" class="form-control" name="IdUsuario" readonly>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Nombres" type="text" class="form-control" name="nombres">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Apellidos" type="text" class="form-control" name="apellidos">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Email" type="email" class="form-control" name="email"></div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Codigo estudiantil" type="number" class="form-control" name="codigo">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Celular" type="number" class="form-control" name="celular">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Biografia" type="text" class="form-control" name="biografia">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class="programaSelect form-control" name="programa">
														<option disabled selected>Programa</option>
													</select>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class=" form-control" name="rol">
														<option disabled selected>Elegir rol</option>
														<option value="1">Administrador</option>
														<option value="2">Estudiante</option>
														<option value="3">Vendedor</option>
														<option value="4">Monitor</option>
													</select>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class=" form-control" name="estado">
														<option disabled selected>Elegir Estado</option>
														<option value="1">Activo</option>
														<option value="2">Desabilitado</option>
														<option value="3">Bloqueado</option>													</select>
												</div>
											</div>
											<input hidden type="number" class="form-control" name="idUsuario">
											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end modal -->
				</section>
				<!-- end USER -->
				<section id="Grupos" class="hide">
					<div class="activity">
						<div class="title">
							<i class='bx bxs-group'></i>
							<span class="text">Almuerzos</span>
							<!-- Button trigger modal -->
							<div class="container-fluid">
								<div class="justify-content-center row">
									<button type="button" class="btn acceptButton" data-toggle="modal" data-target="#modalCrearAlmuerzo">
										Crear grupo
									</button>
								</div>
							</div>
						</div>
						<table class="activity-data table" id="almuerzosRegistrados">
							<thead class="table">
								<tr>
									<th class="data-title" scope="col">ID</th>
									<th class="data-title" scope="col">Nombre</th>
									<th class="data-title" scope="col">Descripción</th>
									<th class="data-title" scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody class="data">

							</tbody>
						</table>
					</div>
					<!-- Modal CREAR USUARIO -->
					<div class="modal fade" id="modalCrearAlmuerzo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Registrar Almuerzo</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="/../controllers/action/registrarAlmuerzo.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="ID" type="email" class="form-control" name="ID_almuerzo" readonly></div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Nombre" type="text" class="form-control" name="nombre">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Descripcion" type="text" class="form-control" name="descripcion">
												</div>
											</div>
											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Modal EDITAR ALMUERZO-->
					<div class="modal fade" id="modalEditarAlmuerzo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ModalEditarLabel">Editar usuario</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form id="formEditarAlmuerzo" action="/../controllers/action/editarAlmuerzo.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="ID" type="text" class="form-control" name="ID_almuerzo" readonly>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Nombre" type="text" class="form-control" name="nombre">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Descripción" class="form-control" name="descripcion">
												</div>
											</div>

											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end modal -->
				</section>
				<!-- end Almuerzo -->
				<section id="Publicaciones" class="hide">
					<div class="activity">
						<div class="title">
							<i class='bx bx-cart-add'></i>
							<span class="text">Articulos</span>
							<!-- Button trigger modal -->
							<div class="container-fluid">
								<div class="justify-content-center row">
									<button type="button" class="btn acceptButton" data-toggle="modal" data-target="#agregarAlmuerzoMenu">
										Crear articulo
									</button>
								</div>
							</div>
						</div>
						<table class="activity-data table" id="almuerzosEnMenu">
							<thead class="table">
								<tr>
									<th class="data-title" scope="col">IDalmuerzo</th>
									<th class="data-title" scope="col">Nombre Almuerzo</th>
									<th class="data-title" scope="col">IDmenu</th>
									<th class="data-title" scope="col">Día</th>
									<th class="data-title" scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody class="data">

							</tbody>
						</table>
					</div>
					<!-- Modal CREAR ALMUEZO -->
					<div class="modal fade" id="agregarAlmuerzoMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Agregar un Almuerzo</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="/../controllers/action/registrarAlmuerzoMenu.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="IDalmuerzo" type="text" class="form-control" name="ID_almuerzo">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class="diaSelect form-control" name="dia">
														<option disabled selected>Dia</option>
													</select>
												</div>
											</div>
											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn declineButton" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn acceptButton">Guardar</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Modal EDITAR MENU-->
					<div class="modal fade" id="modalEditarAlmuerzoMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="ModalEditarLabel">Editar almuerzo en Menu</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form id="formEditarAlmuerzoMenu" action="/../controllers/action/editarAlmuerzoMenu.php" method="post">
									<div class="modal-body">
										<div class="container-fluid">
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="ID_almuerzo" type="text" class="form-control" name="ID_almuerzo" readonly>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="Nombre" type="text" class="form-control" name="nombre">
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="col-md-8"><input placeholder="IDmenu" class="form-control" name="ID_menu" readonly>
												</div>
											</div>
											<div style="padding:7px 0;" class="justify-content-center row">
												<div class="rol col-md-8">
													<select class="diaSelect form-control" name="dia">
														<option disabled selected>Dia</option>
													</select>
												</div>
											</div>

											<div class="justify-content-center row">
												<button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
												<button type="submit" class="btn btn-primary">Guardar</button>
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end modal -->
				</section>
			</div>
		</section>


	</main>
	
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script>
		$(document).ready(function() {
			// Oculta todas las secciones excepto la primera al cargar la página
			$(".hide").hide();
			$("#Usuarios").show();
			$("#over").show();

			// Maneja los clics en los enlaces de la lista
			$("#arti-nav").click(function(e) {

				$(".hide").hide();
				$("#Publicaciones").show();

			});
			$("#user-nav").click(function(e) {

				$(".hide").hide();
				$("#Usuarios").show();
				$("#over").show();

			});
			$("#group-nav").click(function(e) {

				$(".hide").hide();
				$("#Grupos").show();

			});
			$("#config-nav").click(function(e) {

				$(".hide").hide();
				$("#configur").show();

			});
		});
	</script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/adminfront.js"></script>
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
	<script src="js/administrar_usuario.js"></script>
	<script src="js/administrar_almuerzos.js"></script>
	<script src="js/administrar_menu.js"></script>
	<script src="js/cargarProgramas.js"></script>
	<script src="js/cargarDias.js"></script>
	<script src="js/admincharts.js"></script>


	<!-- ===== IONICONS ===== -->
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>