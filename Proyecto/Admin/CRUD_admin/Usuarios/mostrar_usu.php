<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" /> 
			<title>Registro de Usuarios</title>

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
			<h1> Usuarios ingresados </h1>
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

					@$db = new mysqli('localhost','root','','sirama', '3308');

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
						$last = isset($_POST[ 'apellido' ]) ? trim($_POST[ 'apellido' ]) : "";
						$cargo = isset($_POST[ 'cargo' ]) ? trim($_POST[ 'cargo' ]) : "";
						$pass = isset($_POST[ 'pass' ]) ? trim($_POST[ 'pass' ]) : "";
						$usu = isset($_POST[ 'usu' ]) ? trim($_POST[ 'usu' ]) : "";
						$email = isset($_POST[ 'email' ]) ? trim($_POST[ 'email' ]) : "";
						

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($name) || empty($last) || empty($cargo) || empty($pass) || empty($usu) || empty($email)) {
						$msg = "Existen campos en el formulario sin llenar.";
						$msg .= "Regrese al formulario y llene todos los campos. <br>\n";
						$msg .= "[<a href=\"modificar.php?id=" . $id . "\">Volver</a>]\n";

						echo $msg;
						exit ( 0 );
						}

						if (!get_magic_quotes_gpc()) {
							$id = addslashes($id);
							$name = addslashes($name);
							$last = addslashes($last);
							$cargo = addslashes($cargo);
							$pass = addslashes($pass);
							$usu = addslashes($usu);
						}

						//Creando la consulta de actualización con los datos
						//enviados del formulario de modificación de libros
						
						$consulta = "update usuarios set Nombres = '" . $name . "', Apellidos = '" . $last . "', Cargo = '"
									. $cargo . "', Clave = '" . $pass . "', Usuario = '" . $usu . "', Correo = '" . $email . "' WHERE Id_Usu = '" . $id . "'"; 

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
					$consulta = " DELETE FROM usuarios WHERE Id_Usu = '" .
					$_GET['id'] . "'" ;
					$resultc = $db->query($consulta);
					$num_results = $db->affected_rows;
					echo "se ha eliminado usuario de id = " . $_GET[ 'id' ] . "<br>" ;
				}

				//Haciendo una consulta de todos los cursos presentes
				//en la tabla cursos
				$consulta = " SELECT * FROM usuarios ORDER BY Id_Usu";
				//Ejecutando la consulta a través del objeto $db
				$resultc = $db->query($consulta);
				//Obteniendo el número de registros devueltos
				$num_results = $resultc->num_rows;
				echo "<table class='table'>
				<colgroup>
				<col class=\"idusu\">
				</colgroup>
				<colgroup>
				<col class=\"name\">
				</colgroup>
				<colgroup>
				<col class=\"lastname\">
				</colgroup>
				<colgroup>
				<col class=\"cargo\">
				</colgroup>
				<colgroup>
				<col class=\"Usuario\">
				</colgroup>
				<colgroup>
				<col class=\"Correo\">
				</colgroup>
				<colgroup>
				<col class=\"action\">
				</colgroup>
				<thead>
				<tr id=\"theader\">
				<th>ID</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>CARGO</th>
				<th>USUARIO</th>
				<th>CORREO</th>
				<th>ACCIÓN</th>
				</tr>
				</thead>
				<tbody>";

				while ($row = $resultc->fetch_assoc()) {
				echo "<tr class=\"normal\"onmouseover=\"this.className='selected'\" onmouseout=\"this.className='normal'\">";
				echo "<td scope='col'>";
				echo "" . $row[ 'Id_Usu' ] . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Nombres' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Apellidos' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Cargo' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . stripslashes($row[ 'Usuario' ]) . "";
				echo "</td><td scope='col'>";
				echo "" . $row[ 'Correo' ];
				echo "</td><td scope='col'>";
				echo "[<a href=\"" . $_GET[ 'opc' ] . ".php?id=" .
				$row[ 'Id_Usu' ] . "\">";
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
				<a href = "Opciones_Usu.php" class = "d-block h3
				font-weight-normal" > Regresar <br>
				<small class = "d-block text-muted
				text-small" > Menu </small>
				</a>
		</body>
	</html>