<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Gestión de Beneficiarias</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id ="bootstrap-css" >
			<link href = "css/style.css" rel = "stylesheet" />
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "js/modernizr.custom.lis.js" ></script>

			<!-- Icono de la fundación -->
			<link rel = "icon" href = "../../../img/Icono/Logo.ico" />
		</head>

		<body class="container">
		<?php
			session_start();

			if (!isset($_SESSION["usuario"])) {
				header("location:../../../Acceso_Admin.html");
			}
        ?>
				<header>
					<nav class = "navbar navbar-dark bg-primary" >
					<span class = "navbar-text" >
					<h1> Gestión de Beneficiarias</h1>
					</span>
					</nav>
				</header>

				<div>
					<div id = "menubuttons" >
						<div class = "col-md-3" id = "uno" >
							<a class = "btn btn-block btn-lg btn-success" data-toggle = "modal" data-target = "#mymodal"
							href = "../../Beneficiarias.php#portfolio" target = "_self" title = "Página Principal Administrador" >
							<img class = "icon" src = "img/icon-home.png" ><br>
							<span class = "texto_grande" > Principal </span></a>
						</div>
					
						<div class = "col-md-3" id = "dos" >
                            <a class = "btn btn-block btn-lg btn-warning" data-toggle = "modal" data-target = "#mymodal"
                            href = "nuevabeneficiaria.php" target = "_self" title = "Nueva Beneficiaria" >
							<img class = "icon" src = "img/icon-new.png" ><br>
							<span class = "texto_grande" > Nueva Beneficiaria </span>
							</a>
						</div>

						<div class = "col-md-3" id = "cuatro" >
                            <a class = "btn btn-block btn-lg btn-primary" data-toggle = "modal" data-target = "#mymodal"
                             href = "mostrar_bene.php?opc=modificar" target = "_self" title = "Modificar Beneficiaria" >
							<img class = "icon" src = "img/icon-edit.png" ><br>
							<span class = "texto_grande" > Modificar datos </span>
							</a>
						</div>

						<div class = "col-md-3" id = "cinco" >
							<a class = "btn btn-block btn-lg btn-danger" href = "mostrar_bene.php?opc=eliminar" 
							target ="_self" title = "Eliminar Beneficiaria" >
							<img class = "icon" src = "img/icon-trash.png" ><br>
							<span class = "texto_grande" > Eliminar Beneficiaria </span>
							</a>
						</div>

					</div>
				</div>
		</body>
	</html>