<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Resultados al agregar noticia</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" /> 

			<!-- <link rel="stylesheet" href="css/libros.css" /> -->
			<script src = "js/modernizr.custom.lis.js" ></script>
		</head>

		<body class="container">
			<header>
				<nav class = "navbar navbar-dark bg-primary" >
					<span class = "navbar-text" >
						<h1> Resultado al agregar noticia a la base de datos </h1>
					</span>
				</nav>
			</header>

			<section>
				<article>
					<?php
						//Asignando los datos del formulario
						//a variables locales con nombres cortos
						$id = trim($_POST[ 'noti_id' ]);
						$titulo = trim($_POST[ 'titu' ]);
						$descri = trim($_POST[ 'descrip' ]);
						$conte = trim($_POST[ 'conte' ]);
						$esta = trim($_POST[ 'estad' ] ? $_POST['estad'] : 0);
						$fecha = trim($_POST[ 'fecha' ]);

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($id) || empty($titulo) || empty($descri) || empty($conte) || empty($fecha)) {
							$msg = "Existen campos en el formulario sin llenar. ";
							$msg .= "Regrese al formulario y llene todos los campos. <br />\n";
							$msg .= "[<a href=\"nuevanoticia.html\">Volver</a>]\n";

							echo $msg;
							exit (0);
						}

						if (!get_magic_quotes_gpc()) {
							$id = intval($id);
							$titulo = addslashes($titulo);
							$descri = addslashes($descri);
							$conte = addslashes($conte);
							$esta = addslashes($esta);
							$fecha = addslashes($fecha);
						}

						//Conectando con el servidor MySQL y seleccionando
						//la base de datos con la que se trabajará
						@$db = new mysqli( 'localhost' , 'root' , '' , 'sirama', "3308");

						// @$db = new mysqli('localhost','root','','sirama'); <-- Utilizar esta si no funciona la de arriba

						//Establecer el conjunto de caracteres a utf8
						$db->set_charset( "utf8" );

						if (mysqli_connect_error()) {
							$msgerror = "No se ha logrado conectar a la base de datos. ";
							$msgerror .= "Reporte el problema al administrador.";
							echo $msgerror;
							exit (0);
						}

						$consulta = "INSERT INTO noticias (Id_Noti, Titulo, Descripcion, Contenido, Estado, Fecha)";
						$consulta .= "VALUES (". $id . ", '" . $titulo . "', '" .  $descri . "', '" . $conte . "', '" . $esta ."', '" . $fecha . "')";

						$resultc = $db->query($consulta);
						if($resultc){
						echo $db->affected_rows . " noticia agregada a la base de
						datos."; 
						}
						else {
							echo "No se pudo agregar la noticia.";
							echo "Ya existe un registro en la base de datos con el número de Id ingresado.";
						} 


						//Cerrar la conexión
						$db->close(); 
					?> 

					<br />
					<hr class = "d-lg-none divider" >

					<section class = "m-b-30 m-t-30" >
						<div class = "row pager" >
							<div class = "col-md-6 text-left" >
								<a href = "Opciones_Noticias.html" class = "d-block h3 font-weight-normal" > Regresar <br>
								<small class = "d-block text-muted text-small" > Menu </small>
								</a>
							</div>
							
							<div class = "col-md-6 text-right" >
								<a href = "nuevanoticia.html" class = "d-block h3 font-weight-normal" >
								Agregar <br>
								<small class = "d-block text-muted text-small" > Otra noticia </small>
								</a>
							</div>
						</div>
					</section>
				</article>
			</section>
		</body>
	</html>