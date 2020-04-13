<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" /> 
			<title>Cursos en base de datos</title>

			<link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel = "stylesheet" id ="bootstrap-css" >
			<script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "js/modernizr.custom.lis.js" ></script>
		</head>

		<header>
			<nav class = "navbar navbar-dark bg-primary" >
			<span class = "navbar-text" >
			<h1> Cursos Registrados </h1>
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
						$name = isset($_POST[ 'nombre' ]) ? trim($_POST[ 'nombre' ]) : "";
						$descri = isset($_POST[ 'descripcion' ]) ? trim($_POST[ 'descripcion' ]) : "";
						$hora = isset($_POST[ 'hora' ]) ? trim($_POST[ 'hora' ]) : "";
						$precio = isset($_POST[ 'preci' ]) ? trim($_POST[ 'preci' ]) : "";
						$esta = isset($_POST[ 'estado' ]) ? trim($_POST[ 'estado' ]) : "";
						$dura = isset($_POST[ 'dura' ]) ? trim($_POST[ 'dura' ]) : "";
						$fecha = isset($_POST[ 'fecha' ]) ? trim($_POST[ 'fecha' ]) : "";

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($name) || empty($descri) || empty($hora) || empty($precio) || empty($dura) || empty($fecha)) {
						$msg = "Existen campos en el formulario sin llenar.";
						$msg .= "Regrese al formulario y llene todos los campos. <br>\n";
						$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";

						echo $msg;
						exit ( 0 );
						}

						if (!get_magic_quotes_gpc()) {
							$id = addslashes($id);
							$name = addslashes($name);
							$descri = addslashes($descri);
							$hora = addslashes($hora);
							$precio = addslashes($precio);
							$esta = addslashes($esta);
							$dura = addslashes($dura);
							$fecha = addslashes($fecha);
						}

						//Creando la consulta de actualización con los datos
						//enviados del formulario de modificación de libros
						
						$consulta = "update cursos set Nombre = '" . $name . "',  Descripcion = '" . $descri . "', Horario = '" . $hora . "', Precio = '" . $precio . "', Estado = '" . $esta . "', Duracion = '" . $dura . "', Fecha = '" . $fecha . "' WHERE Id_Curso = '" . $id . "'"; 

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
					$consulta = " DELETE FROM cursos WHERE Id_Curso = '" .
					$_GET['id'] . "'" ;
					$resultc = $db->query($consulta);
					$num_results = $db->affected_rows;
					echo "se ha eliminado curso de id = " . $_GET[ 'id' ] . "<br>" ;
				}

				//Haciendo una consulta de todos los cursos presentes
				//en la tabla cursos
				$consulta = " SELECT * FROM cursos ORDER BY Id_Curso";
				//Ejecutando la consulta a través del objeto $db
				$resultc = $db->query($consulta);
				//Obteniendo el número de registros devueltos
				$num_results = $resultc->num_rows;
				echo "<table class='table'>
				<colgroup>
				<col class=\"idcur\">
				</colgroup>
				<colgroup>
				<col class=\"name\">
				</colgroup>
				<colgroup>
				<col class=\"descri\">
				</colgroup>
				<colgroup>
				<col class=\"hora\">
				</colgroup>
				<colgroup>
				<col class=\"precio\">
				</colgroup>
				<colgroup>
				<col class=\"esta\">
				</colgroup>
				<colgroup>
				<col class=\"dura\">
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
				<th>NOMBRE</th>
				<th>DESCRIPCIÓN</th>
				<th>HORA</th>
				<th>PRECIO</th>
				<th>ESTADO</th>
				<th>DURACIÓN</th>
				<th>FECHA</th>
				<th>ACCIÓN</th>
				</tr>
				</thead>
				<tbody>";

				while ($row = $resultc->fetch_assoc()) {
				echo "<tr class=\"normal\"onmouseover=\"this.className='selected'\" onmouseout=\"this.className='normal'\">";
				echo "<td scope='col'>";
				echo "" . $row[ 'Id_Curso' ] . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Nombre' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Descripcion' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Horario' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Precio' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Estado' ]) . "";
				echo "</td><td scope='col'>\n";
				echo "" . stripslashes($row[ 'Duracion' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Fecha' ];
				echo "</td><td scope='col'>";
				echo "[<a href=\"" . $_GET[ 'opc' ] . ".php?id=" .
				$row[ 'Id_Curso' ] . "\">";
				echo "" . $_GET[ 'opc' ] . "";
				echo "</a>]";
				echo "</td></tr>";
				}
				echo "</tbody>";
				echo "<tfoot>";
				echo "<tr id=\"tfooter\">";
				echo "<th colspan=\"9\">";
				//Mostrando el número total de registros de la tabla libros
				echo "Número de registros: " . $num_results . "";
				echo "</th>";
				echo "</tr>";
				echo "</tfoot>";
				echo "</table>";
				?>
				<hr class = "d-lg-none divider" >
				<a href = "Opciones_Cursos.html" class = "d-block h3
				font-weight-normal" > Regresar <br>
				<small class = "d-block text-muted
				text-small" > Menu </small>
				</a>
		</body>
	</html>