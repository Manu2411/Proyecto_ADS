<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Modificar un noticia</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" />
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		</head>

		<body class="container">
			<header>
				<nav class = "navbar navbar-dark bg-primary" >
				<span class = "navbar-text" >
				<h1> Modificar noticia </h1>
				</span>
				</nav>
			</header>

			<section>
				<article> 
					<?php
						//Creando una nueva instancia del objeto de conexión
						//a la base de datos
						@$db = new mysqli( 'localhost' , 'root' , '' , 'sirama', "3308" );

						//@$db = new mysqli('localhost','tecnologico','fetudb','libros', "3308");

						if (mysqli_connect_errno()) {
							$msgerror = "Error: no se puede conectar a la base de datos";
							$msgerror .= "Contacte con soporte para resolver el problema";
							echo $msgerror;
							exit ( 0 );
						} 

						//Establecer el conjunto de caracteres a utf8 
						$db->set_charset("utf8");

						//Haciendo una consulta de todos los libros presentes
						//en la tabla libros
						$consulta = " SELECT * FROM noticias WHERE Id_Noti = '" . $_GET['id'] . "'";

						//echo $consulta . "<br>\n";
						//Ejecutando la consulta a través del objeto $db
						$resultc = $db->query($consulta);

						//Obteniendo el número de registros devueltos
						$num_results = $resultc->num_rows;
						$row = $resultc->fetch_assoc(); 
					?>

					<form action = "mostrar_noticias.php?id= <?php echo $_GET[ 'id' ] ?>" method = "POST" class = "formoidsolid-purple" >
						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" class = "form-control" name = "idnoti" value = "<?php echo $row[ 'Id_Noti' ] ?> " maxlength = "5" placeholder = "Id Noticia" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-name form-group" > 
							<label class = "title" ></label>
							<div class = "nameFirst" > 
								<input class = "form-control" type = "text" name = "titulo" value = "<?php echo $row[ 'Titulo' ] ?> " maxlength = "100" placeholder = "Titulo Noticia" class = "large" /> 
								<span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "descripcion" value = "<?php echo $row[ 'Descripcion' ] ?> " maxlength = "350" placeholder = "Descripción de Noticia"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-number form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input class = "form-control" type = "text" name = "contenido" value = "<?php echo $row[ 'Contenido' ] ?> " maxlength = "1500" placeholder = "Contenido de Noticia" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-number form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input class = "form-control" type = "text" name = "estado" value = "<?php echo $row[ 'Estado' ] ?> " maxlength = "1" placeholder = "Estado de Noticia" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-number form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input class = "form-control" type = "text" name = "fecha" value = "<?php echo $row[ 'Fecha' ] ?> " maxlength = "10" placeholder = "aaaa-mm-dd" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div > 
							<input type = "submit" class = "btn btn-primary" name = "guardar" value = "Guardar" /> 
						</div>
					</form>

						<hr class = "d-lg-none divider" >
						<a href = "mostrar_noticias.php?opc=modificar" class = "d-block h3 font-weight-normal"> Volver <br>
						<small class = "d-block text-muted text-small" > a la tabla de modificación </small>
						</a>
				</article>
			</section>
		</body>
	</html>