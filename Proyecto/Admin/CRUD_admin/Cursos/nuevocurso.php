<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Nuevo Curso</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" />
			<link rel="stylesheet" type="text/css" href="css/validacion.css">
			<script type="text/javascript" src="js/validar_id.js"></script>
			<script type="text/javascript" src="js/validar_mood.js"></script>
			<script type="text/javascript" src="js/validar_place.js"></script>
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
				<h1> Nuevo Curso</h1>
				</span>
				</nav>
			</header>

			<section>
				<article >
					<form action = "insertar_curso.php" method = "POST" enctype = "multipart/form-data">
						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "cur_id" placeholder = "Id Curso" id = "Id" maxlength = "5" class = "form-control" />
								<span class = "icon-place" id = "numbersOnly">Ingrese solo números enteros y mayores a cero.</span>
							</div>
						</div>

						<div class = "element-name form-group" >
							<label class = "title" ></label>
							<div class = "nameFirst" >
								<input type = "text" name = "name" placeholder = "Nombre de Curso" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-input form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "descrip" placeholder = "Descripción de Curso" maxlength = "400" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "time" placeholder = "8:00 am - 12:00 pm" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "price" placeholder = "Precio de Curso" maxlength = "15" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "estado" id = "mood" placeholder = "Estado de Curso" maxlength = "1" class = "form-control" />
								<span class = "icon-place" id="checkmood">Solo se aceptan valores de 0 ó 1</span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "number" min = "1" max = "6" value = "1" name = "ubi" id = "place" placeholder = "Ubicación Curso" maxlength = "5" class = "form-control" />
								<span class = "icon-place" id = "noWrite" >No se permite la escritura.</span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "dura" placeholder = "Duración de Curso" maxlength = "20" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "date" name = "fecha" placeholder = "aaaa-mm-dd" maxlength = "50" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" >SUGERENCIA: Solamente insertar imágenes de tamaño de 650x350</label>
							<div class = "item-cont" >
								<input type = file name = "image" size = "20" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<input class = "btn btn-primary " type = "submit" name = "enviar" value = "Agregar" />
					</form>

					<hr class = "d-lg-none divider" >
					<a href = "Opciones_Cursos.php" class = "d-block h3 font-weight-normal" > Regresar <br>
						<small class = "d-block text-muted text-small" > Menu </small>
					</a>
				</article>
			</section>
		</body>
	</html>