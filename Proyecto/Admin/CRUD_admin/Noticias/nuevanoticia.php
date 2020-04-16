<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Nueva Noticia</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" />
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
			<script type = "text/javascript" >
				if ( typeof jQuery === 'undefined' ) {
					var e = document.createElement( "script" );
					e.src = "js/modernizr.custom.lis.js";
					e.type = "text/javascript"; 
					document.getElementsByTagName( "head" )[ 0 ].appendChild(e);
				} 
			</script>
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
				<h1> Nueva Noticia </h1>
				</span>
				</nav>
			</header>

			<section>
				<article >
					<form action = "insertar_noticia.php" method = "POST" >
						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "noti_id" placeholder = "Id Noticia" maxlength = "5" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-name form-group" >
							<label class = "title" ></label>
							<div class = "nameFirst" >
								<input type = "text" name = "titu" placeholder = "Titulo de Noticia" maxlength = "100" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-input form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "descrip" placeholder = "Descripción de Noticia" maxlength = "350" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "conte" placeholder = "Contenido de Noticia" maxlength = "1500" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "estad" placeholder = "Estado de Noticia" maxlength = "1" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" name = "fecha" placeholder = "aaaa-mm-dd" maxlength = "30" class = "form-control" />
								<span class = "icon-place" ></span>
							</div>
						</div>

						<input class = "btn btn-primary " type = "submit"
						name = "enviar" value = "Agregar" />
					</form>

					<hr class = "d-lg-none divider" >
					<a href = "Opciones_Noticias.php" class = "d-block h3 font-weight-normal" > Regresar <br>
						<small class = "d-block text-muted text-small" > Menú </small>
					</a>
				</article>
			</section>
		</body>
	</html>