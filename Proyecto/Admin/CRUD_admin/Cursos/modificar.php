<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Modificar un curso</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" />
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>

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
				<h1> Modificar Curso </h1>
				</span>
				</nav>
			</header>

			<section>
				<article> 
					<?php
						//Creando una nueva instancia del objeto de conexión
						//a la base de datos
						@$db = new mysqli( 'localhost' , 'root' , '' , 'sirama', "3308" );

						// @$db = new mysqli('localhost','root','','sirama'); <-- Utilizar esta si no funciona la de arriba

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
						$consulta = " SELECT * FROM cursos WHERE Id_Curso = '" . $_GET['id'] . "'";

						//echo $consulta . "<br>\n";
						//Ejecutando la consulta a través del objeto $db
						$resultc = $db->query($consulta);

						//Obteniendo el número de registros devueltos
						$num_results = $resultc->num_rows;
						$row = $resultc->fetch_assoc(); 
					?>

					<form action = "mostrar_cursos.php?id= <?php echo $_GET[ 'id' ] ?>" method = "POST" enctype = "multipart/form-data" class = "formoidsolid-purple" >
						<div class = "element-number form-group" >
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input type = "text" class = "form-control" name = "idcur" value = "<?php echo $row[ 'Id_Curso' ] ?> " maxlength = "5" title="No se puede modificar el Id del Curso" class = "large" disabled /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-name form-group" > 
							<label class = "title" ></label>
							<div class = "nameFirst" > 
								<input class = "form-control" type = "text" name = "nombre" value = "<?php echo $row[ 'Nombre' ] ?> " maxlength = "50" placeholder = "Nombre de Curso" class = "large" /> 
								<span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "descripcion" value = "<?php echo $row[ 'Descripcion' ] ?> " maxlength = "400" placeholder = "Descripción de Curso"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-number form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" >
								<input class = "form-control" type = "text" name = "hora" value = "<?php echo $row[ 'Horario' ] ?> " maxlength = "50" placeholder = "Horario Curso: 8:00 am - 12:00 pm" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "preci" value = "<?php echo $row[ 'Precio' ] ?> " maxlength = "15" placeholder = "Precio de Curso"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "estado" value = "<?php echo $row[ 'Estado' ] ?> " maxlength = "5" placeholder = "Estado de Curso"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "place" value = "<?php echo $row[ 'lugar_curso' ] ?> " maxlength = "5" placeholder = "Ubicación de Curso"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "text" name = "dura" value = "<?php echo $row[ 'Duracion' ] ?> " maxlength = "20" placeholder = "Duración de Curso"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" ></label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "date" name = "fecha" value = "<?php echo $row[ 'Fecha' ] ?> " maxlength = "400" placeholder = "aaaa-mm-dd"class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div class = "element-input form-group" > 
							<label class = "title" >SUGERENCIA: Solamente insertar imágenes de tamaño de 650x350</label>
							<div class = "item-cont" > 
								<input class = "form-control" type = "file" name = "img" class = "large" /> <span class = "icon-place" ></span> 
							</div>
						</div>

						<div > 
							<input type = "submit" class = "btn btn-primary" name = "guardar" value = "Guardar" /> 
						</div>
					</form>

						<hr class = "d-lg-none divider" >
						<a href = "mostrar_cursos.php?opc=modificar" class = "d-block h3 font-weight-normal"> Volver <br>
						<small class = "d-block text-muted text-small" > a la tabla de modificación </small>
						</a>
				</article>
			</section>
		</body>
	</html>