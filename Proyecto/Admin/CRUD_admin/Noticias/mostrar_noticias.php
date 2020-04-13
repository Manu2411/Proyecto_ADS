<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" /> 
			<title>Noticias Ingresadas</title>

			<link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel = "stylesheet" id ="bootstrap-css" >
			<script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "js/modernizr.custom.lis.js" ></script>
		</head>

		<header>
			<nav class = "navbar navbar-dark bg-primary" >
			<span class = "navbar-text" >
			<h1> Noticias en Base de Datos </h1>
			</span>
			</nav>
		</header>

		<body class="container">
			<?php
				//Creando una nueva instancia del objeto de conexión
				//a la base de datos

					@$db = new mysqli('localhost','root','','sirama', '3308');


				if (mysqli_connect_errno()) {
					$msgerror = "Error: no se puede conectar a la base de
					datos. " ;
					$msgerror .= "Contacte con soporte para resolver el
					problema." ;

					echo $msgerror;
					exit (0);
				}

				// Establecer el conjunto de caracteres a utf8
				$db->set_charset( "utf8" );

				//Si se ha llamado esta página desde el formulario
				//para modificar libros ejecutar primero la actualización
				//del registro

				if (isset($_POST[ 'guardar' ])) {
						//Creando variables locales con los datos enviados
						//desde el formulario de modificación
						$id = isset($_GET[ 'id' ]) ? trim($_GET[ 'id' ]) : "";
						$titulo = isset($_POST[ 'titulo' ]) ? trim($_POST[ 'titulo' ]) : "";
						$descripcion = isset($_POST[ 'descripcion' ]) ? trim($_POST[ 'descripcion' ]) : "";
						$contenido = isset($_POST[ 'contenido' ]) ? trim($_POST[ 'contenido' ]) : "";
						$estado = isset($_POST[ 'estado' ]) ? trim($_POST[ 'estado' ]) : "0";
						$fecha = isset($_POST[ 'fecha' ]) ? trim($_POST[ 'fecha' ]) : "";

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($titulo) || empty($descripcion) || empty($contenido) || empty($fecha)) {
						$msg = "Existen campos en el formulario sin llenar.";
						$msg .= "Regrese al formulario y llene todos los campos. <br>\n";
						$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";

						echo $msg;
						exit ( 0 );
						}	

						if (!get_magic_quotes_gpc()) {
							$id = addslashes($id);
							$titulo = addslashes($titulo);
							$descripcion = addslashes($descripcion);
							$contenido = addslashes($contenido);
							$estado = addslashes($estado);
							$fecha = addslashes($fecha);
						}

						//Creando la consulta de actualización con los datos
						//enviados del formulario de modificación de libros
						
						$consulta = "update noticias set Titulo = '" . $titulo . "',  Descripcion = '" . $descripcion . "', Contenido = '" . $contenido . "', Estado = '" .$estado . "', Fecha = '" . $fecha . "' WHERE Id_Noti = '" . $id . "'";

						//Ejecutando la consulta de actualización
						$resultc = $db->query($consulta);

						//Obteniendo el número de registros actualizados
						$num_results = $db->affected_rows;

						echo "<div class=\"query\">\n\t<p>" ;
						echo "\t\t" . $num_results . " fila(s) actualizada(s)\n";
						echo "\t</p>\n</div>\n";

						$_GET[ 'opc' ] = "modificar";
				}

				if (isset($_GET[ 'del' ]) && $_GET[ 'del' ] == "s" ) {
					$consulta = " DELETE FROM noticias WHERE Id_Noti = '" .
					$_GET['id'] . "'" ;
					$resultc = $db->query($consulta);
					$num_results = $db->affected_rows;
					echo "se ha eliminado noticia de id = " . $_GET[ 'id' ] . "<br>" ;
				}

				//Haciendo una consulta de todos los libros presentes
				//en la tabla libros
				$consulta = " SELECT * FROM noticias ORDER BY Id_Noti";
				//Ejecutando la consulta a través del objeto $db
				$resultc = $db->query($consulta);
				//Obteniendo el número de registros devueltos
				$num_results = $resultc->num_rows;
				echo "<table class='table'>
				<colgroup>
				<col class=\"idnoti\">
				</colgroup>
				<colgroup>
				<col class=\"titu\">
				</colgroup>
				<colgroup>
				<col class=\"descrip\">
				</colgroup>
				<colgroup>
				<col class=\"conte\">
				</colgroup>
				<colgroup>
				<col class=\"esta\">
				</colgroup>
				<colgroup>
				<col class=\"fecha\">
				</colgroup>
				<colgroup>
				<col class=\"action\">
				</colgroup>
				<thead>
				<tr id=\"theader\">
				<th>ID</th>
				<th>TÍTULO</th>
				<th>DESCRIPCIÓN</th>
				<th>CONTENIDO</th>
				<th>ESTADO</th>
				<th>FECHA</th>
				<th>ACCIÓN</th>
				</tr>
				</thead>
				<tbody>";

				while ($row = $resultc->fetch_assoc()) {
				echo "<tr class=\"normal\"onmouseover=\"this.className='selected'\" onmouseout=\"this.className='normal'\">";
				echo "<td scope='col'>";
				echo "" . $row[ 'Id_Noti' ] . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Titulo' ]) . "";
				echo "</td><td scope='col'>\n";
				echo "" . stripslashes($row[ 'Descripcion' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Contenido' ];
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Estado' ];
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Fecha' ];
				echo "</td><td scope='col'>";
				echo "[<a href=\"" . $_GET[ 'opc' ] . ".php?id=" .
				$row[ 'Id_Noti' ] . "\">";
				echo "" . $_GET[ 'opc' ] . "";
				echo "</a>]";
				echo "</td></tr>";
				}
				echo "</tbody>";
				echo "<tfoot>";
				echo "<tr id=\"tfooter\">";
				echo "<th colspan=\"5\">";
				//Mostrando el número total de registros de la tabla libros
				echo "Número de registros: " . $num_results . "";
				echo "</th>";
				echo "</tr>";
				echo "</tfoot>";
				echo "</table>";
				?>
				<hr class = "d-lg-none divider" >
				<a href = "Opciones_Noticias.html" class = "d-block h3
				font-weight-normal" > Regresar <br>
				<small class = "d-block text-muted
				text-small" > Menu </small>
				</a>
		</body>
	</html>