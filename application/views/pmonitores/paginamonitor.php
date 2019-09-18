<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!----------------icono_pestaña------------------>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/icon.ico" />
	<title>Bienvenido &raquo; Monitor</title>
	<!-----------------------------------css----------------------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylemonitor/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css">

	<script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>scripts/scriptmonitor/script.js"></script>
	<script src="<?php echo base_url(); ?>scripts/sweetalert2.js"></script>
	<script>
		$(window).load(function () {
			$('#loading').hide();

		});
	</script>

</head>


<body>
	<div id="barra"><img id="img1" src="<?php echo base_url(); ?>css/images/logoucp2.png" alt=" logo_universidad">
		Menu principal
		<img id="img2" src="<?php echo base_url(); ?>css/images/logobiblioteca.png" alt="Logo de la biblioteca">
	</div>
	<nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
		<div class="navbar-toggler animate">
			<span class="menu-icon"></span>
		</div>
		<ul class="navbar-menu animate">
			<li>
				<a href="" class="animate">
					<span
						class="desc animate"><?php foreach ($usuarios as $user){ echo $user->apellidos.' '.$user->nombres; } ?></span>
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li>
				<a href="http://localhost/controldemonitores/login/cerrarsession"
					class="animate">
					<span class="desc animate">Cerrar Sesion </span>
					<span class="glyphicon glyphicon-log-out"></span>
				</a>
			</li>
		</ul>
	</nav>

	<div id="container" class="container">
		<div class="item" id="itemmonitores" style="cursor:pointer;">
			<a class="item__link" href="<?php echo base_url(); ?>pmonitordatosp" data-toggle="tooltip"
				data-placement="top" title="Datos personales">
				<div class="item__thumbs">
					<div class="item__thumb-container">
						<img src="<?php echo base_url(); ?>css/stylemonitor/images/datospersonales.png"
							alt="Videos Showreel" class="item__thumb js-thumb">
					</div>

					<div class="item__reflection-wrapper">
						<div class="item__reflection-container">
							<img src="<?php echo base_url(); ?>css/stylemonitor/images/datospersonales.png"
								alt="Videos Showreel" class="item__thumb item__reflection js-reflection">
						</div>
					</div>
				</div>

			</a>
		</div>

		<div class="item">
			<a class="item__link" href="<?php echo base_url(); ?>pmonitorbitacora" data-toggle="tooltip"
				data-placement="top" title="Bitacora">
				<div class="item__thumbs">
					<div class="item__thumb-container">
						<img src="<?php echo base_url(); ?>css/stylemonitor/images/lista.png" alt="Sleep Benefits"
							class="item__thumb js-thumb">
					</div>

					<div class="item__reflection-wrapper">
						<div class="item__reflection-container">
							<img src="<?php echo base_url(); ?>css/stylemonitor/images/lista.png" alt="Sleep Benefits"
								class="item__thumb item__reflection js-reflection">
						</div>
					</div>
				</div>

			</a>
		</div>
		<div class="item">
			<a class="item__link" href="<?php echo base_url(); ?>phorario" data-toggle="tooltip"
				data-placement="top" title="Horario">
				<div class="item__thumbs">
					<div class="item__thumb-container">
						<img src="<?php echo base_url(); ?>css/images/calendario.png" alt="Sleep Benefits"
							class="item__thumb js-thumb">
					</div>

					<div class="item__reflection-wrapper">
						<div class="item__reflection-container">
							<img src="<?php echo base_url(); ?>css/images/calendario.png" alt="Sleep Benefits"
								class="item__thumb item__reflection js-reflection">
						</div>
					</div>
				</div>

			</a>
		</div>


	</div>



	<div id="barraf">Biblioteca Cardenal Darío Castrillón Hoyos | © 2018 Developed By: Comité de Desarrollo GTI </div>

	<div id="loading">
		<p style="text-align: left; margin:5px; font-size:1.7em;">Bienvenido! Por favor espere......</p>
		<br><br><br><br><br><br>
		<center><img id="cargando" src="<?php echo base_url(); ?>css/images/loading.gif" alt="" width="30%"
				height="30%"></center>

	</div>
	<script>
		$(document).ready(function () {
			$('[data-toggle="tooltip"]').tooltip({
				placement: 'top',
				trigger: 'manual'
			}).tooltip('show');
			// $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>

</html>