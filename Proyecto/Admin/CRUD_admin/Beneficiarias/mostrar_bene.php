<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" /> 
			<title>Registro de Beneficiarias</title>

			<link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel = "stylesheet" id ="bootstrap-css" >
			<script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "js/modernizr.custom.lis.js" ></script>

			<!-- Icono de la fundación -->
			<link rel = "icon" href = "../../../img/Icono/Logo.ico" />
		</head>

		<header>
			<nav class = "navbar navbar-dark bg-primary" >
			<span class = "navbar-text" >
			<h1> Beneficiarias ingresadas </h1>
			</span>
			</nav>
		</header>

		<body class="container">
		<?php
			session_start();

			if (!isset($_SESSION["usuario"])) {
				header("location:../../../Acceso_Admin.php");
			}
		?>
		
			<?php
				//Creando una nueva instancia del objeto de conexión
				//a la base de datos

					@$db = new mysqli('localhost','root','','sirama', '3306');

					// @$db = new mysqli('localhost','root','','sirama'); <-- Utilizar esta si no funciona la de arriba

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
						$opini = isset($_POST[ 'opinion' ]) ? trim($_POST[ 'opinion' ]) : "";
						$mood = isset($_POST[ 'estado' ]) ? trim($_POST[ 'estado' ]) : "0";
						$ubi = isset($_POST[ 'place' ]) ? trim($_POST[ 'place' ]) : "";
						$fecha = isset($_POST[ 'fecha' ]) ? trim($_POST[ 'fecha' ]) : "";

						// Recibiendo los datos del Banner
						$nombre = $_FILES['foto']['name'];
						$tipo = $_FILES['foto']['type'];
						$tamano = $_FILES['foto']['size'];

						/* Comprobando que lo seleccionado es una imagen y el tamaño de esta */

						if ($nombre == "" && $tipo = "" && $tamano == "") {
							$msg = "Debe de seleccionar una imagen para el curso. ";
							$msg .= " Se permiten imágenes de tipo: (jpg, jpeg ó png) <br>\n";
							$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";
						} else {
							if ($tamano <= 4000000) {
								if ($tipo == 'image/jpg' || $tipo == 'image/png' || $tipo == 'image/jpeg') {
	
									//Ruta de la carpeta destino en servidor
									$destino = $_SERVER['DOCUMENT_ROOT'] . '/ADS/Proyecto_ADS/Proyecto/img/Beneficiarias/';
	
									//Movemos la imagen del directorio temporal al directorio elegido
									move_uploaded_file($_FILES['foto']['tmp_name'], $destino.$nombre);
	
								}else {
	
									$msg = "Formato de imagen incorrecto. ";
									$msg .= " Solo se permiten imágenes de tipo: (jpg, jpeg ó png) <br>\n";
									$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";
	
									echo $msg;
									exit ( 0 );
	
								}
							} else {
	
								$msg = "Tamaño de imagen demasiado grande. ";
								$msg .= " Solo se permiten imágenes de tamaño igual ó menor a 4MB. <br>\n";
								$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";
	
								echo $msg;
								exit ( 0 );
	
							}
						}

						/* Finaliza la comprobación de tipo y el tamaño de la imagen */

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($name) || empty($opini) || empty($fecha) || empty($ubi)) {
						$msg = "Existen campos en el formulario sin llenar.";
						$msg .= "Regrese al formulario y llene todos los campos. <br>\n";
						$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";

						echo $msg;
						exit ( 0 );
						}

						if (!get_magic_quotes_gpc()) {
							$id = addslashes($id);
							$name = addslashes($name);
							$opini = addslashes($opini);
							$mood = addslashes($mood);
							$ubi = addslashes($ubi);
							$fecha = addslashes($fecha);
						}

						//Creando la consulta de actualización con los datos
						//enviados del formulario de modificación de libros
						
						$consulta = "update beneficiarias set Nombre = '" . $name . "', Opinion = '" . $opini . "', Fecha = '"
									. $fecha . "', Estado = '" . $mood . "', ubicacion_bene = '" . $ubi . "', Foto = '" . $nombre . "' WHERE Id_Bene = '" . $id . "'"; 

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
					$consulta = " DELETE FROM beneficiarias WHERE Id_Bene = '" .
					$_GET['id'] . "'" ;
					$resultc = $db->query($consulta);
					$num_results = $db->affected_rows;
					echo "se ha eliminado beneficiaria de id = " . $_GET[ 'id' ] . "<br>" ;
				}

				//Haciendo una consulta de todos los cursos presentes
				//en la tabla cursos
				$consulta = " SELECT * FROM beneficiarias ORDER BY Id_Bene";
				//Ejecutando la consulta a través del objeto $db
				$resultc = $db->query($consulta);
				//Obteniendo el número de registros devueltos
				$num_results = $resultc->num_rows;
				echo "<table class='table'>
				<colgroup>
				<col class=\"idbene\">
				</colgroup>
				<colgroup>
				<col class=\"name\">
				</colgroup>
				<colgroup>
				<col class=\"opini\">
				</colgroup>
				<colgroup>
				<col class=\"esta\">
				</colgroup>
				<colgroup>
				<col class=\"place\">
				</colgroup>
				<colgroup>
				<col class=\"foto\">
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
				<th>OPINIÓN</th>
				<th>ESTADO</th>
				<th>UBICACIÓN</th>
				<th>FOTO</th>
				<th>FECHA</th>
				<th>ACCIÓN</th>
				</tr>
				</thead>
				<tbody>";

				while ($row = $resultc->fetch_assoc()) {
				echo "<tr class=\"normal\"onmouseover=\"this.className='selected'\" onmouseout=\"this.className='normal'\">";
				echo "<td scope='col'>";
				echo "" . $row[ 'Id_Bene' ] . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Nombre' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Opinion' ]) . "";
				echo "</td><td scope='col' class = 'text-center'>";
				echo "" . stripslashes($row[ 'Estado' ]) . "";
				echo "</td><td scope='col' class = 'text-center'>";
				echo "" . stripslashes($row[ 'ubicacion_bene' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Foto' ];
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Fecha' ];
				echo "</td><td scope='col'>";
				echo "[<a href=\"" . $_GET[ 'opc' ] . ".php?id=" .
				$row[ 'Id_Bene' ] . "\">";
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
				<a href = "Opciones_Bene.php" class = "d-block h3
				font-weight-normal" > Regresar <br>
				<small class = "d-block text-muted
				text-small" > Menu </small>
				</a>
		</body>
	</html>