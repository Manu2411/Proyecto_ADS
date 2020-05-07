<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Ingreso datos del usuario</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" />
			<link rel="stylesheet" type="text/css" href="css/validacion.css">
			<script type="text/javascript" src="js/validar_id.js"></script>
			<script type="text/javascript" src="js/validar_mood.js"></script>
			<script type="text/javascript" src="js/validar_correo.js"></script>
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
			<script type = "text/javascript" >
				if ( typeof jQuery === 'undefined' ) {
					var e = document.createElement( "script" );
					e.src = "js/modernizr.custom.lis.js";
					e.type = "text/javascript"; 
					document.getElementsByTagName( "head" )[ 0 ].appendChild(e);
				} 
			</script>

			<!-- Icono de la fundación -->
			<link rel = "icon" href = "../../../img/Icono/Logo.ico" />
		</head>

		<body class="container">

		<?php
			session_start();

			if (!isset($_SESSION["usuario"])) {
				header("location:../../../Acceso_Admin.php");
			}
        ?>
			<header>
				<nav class = "navbar navbar-dark bg-primary" >
				<span class = "navbar-text" >
				<h1> Nuevo Usuario</h1>
				</span>
				</nav>
			</header>

			<section>
				<article >
					<form action = "insertar_usu.php" method = "POST" onsubmit = "return validar();">
						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "usu_id" id = "Id" placeholder = "Id Usuario" maxlength = "5" class = "form-control" />
								<span class = "icon-place" id = "numbersOnly" >Ingrese solo números enteros y mayores a cero.</span>
							</div>
						</div>

						<div class = "element-name form-group" >
							<label class = "title" ></label>
							<div class = "nameFirst" >
								<input type = "text" name = "name" placeholder = "Nombres" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-input form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "lastname" placeholder = "Apellidos" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-input form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "cargo" placeholder = "Cargo" maxlength = "50" class = "form-control" />
							</div>
						</div>

						<div class = "element-input form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "password" name = "pass" placeholder = "Ingrese la clave asignada para el usuario" class = "form-control" />
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "usu" placeholder = "Usuario" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "email" id = "email" placeholder = "Correo del Usuario" maxlength = "50" class = "form-control" />
							</div>
						</div>

						<input class = "btn btn-primary " type = "submit" name = "enviar" value = "Agregar" />
					</form>

					<hr class = "d-lg-none divider" >
					<a href = "Opciones_Usu.php" class = "d-block h3 font-weight-normal" > Regresar <br>
						<small class = "d-block text-muted text-small" > Menu </small>
					</a>
				</article>
			</section>
		</body>
	</html>