<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Resultados al agregar usuario</title>

			<link href = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
			<script src = "//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
			<script src = "//code.jquery.com/jquery-1.11.1.min.js" ></script>
			<script src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
			<link rel = "stylesheet" href = "css/links.css" /> 

			<!-- <link rel="stylesheet" href="css/libros.css" /> -->
			<script src = "js/modernizr.custom.lis.js" ></script>

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
						<h1> Resultado al agregar usuario a la base de datos </h1>
					</span>
				</nav>
			</header>

			<section>
				<article>
					<?php
						//Asignando los datos del formulario
						//a variables locales con nombres cortos
						$id = trim($_POST[ 'usu_id' ]);
						$name = trim($_POST[ 'name' ]);
						$last = trim($_POST[ 'lastname' ]);
						$cargo = trim($_POST[ 'cargo' ]);
						$pass = trim($_POST[ 'pass' ]);
						$usu = trim($_POST[ 'usu' ]);
						$email = trim($_POST[ 'email' ]);

						//Verificando que se hayan ingresado datos
						//en todos los controles del formulario
						if (empty($id) || empty($name) || empty($last) || empty($cargo) || empty($pass)
							|| empty($usu) || empty($email) ) {
							$msg = "Existen campos en el formulario sin llenar. ";
							$msg .= "Regrese al formulario y llene todos los campos. <br />\n";
							$msg .= "[<a href=\"nuevoUsuario.php\">Volver</a>]\n";

							echo $msg;
							exit (0);
						}

						if (!get_magic_quotes_gpc()) {
							$id = intval($id);
							$name = addslashes($name);
							$last = addslashes($last);
							$cargo = addslashes($cargo);
							$pass = addslashes($pass);
							$usu = addslashes($usu);
						}

						//Conectando con el servidor MySQL y seleccionando
						//la base de datos con la que se trabajará
						@$db = new mysqli( 'localhost' , 'root' , '' , 'sirama', "3306");

						// @$db = new mysqli('localhost','root','','sirama'); <-- Utilizar esta si no funciona la de arriba

						//Establecer el conjunto de caracteres a utf8
						$db->set_charset( "utf8" );

						if (mysqli_connect_error()) {
							$msgerror = "No se ha logrado conectar a la base de datos. ";
							$msgerror .= "Reporte el problema al administrador.";
							echo $msgerror;
							exit (0);
						}

						$consulta = "INSERT INTO usuarios (Id_Usu, Nombres, Apellidos, Cargo, Clave, Usuario, Correo)";
						$consulta .= "VALUES (". $id . ", '" . $name . "', '" .  $last . "', '" .  $cargo . "', '" . $pass . "', '" . $usu . "', '" . $email . "')";


						$resultc = $db->query($consulta);
						if($resultc){
						echo $db->affected_rows . " usuario agregado a la base de datos."; 
						}
						else {
							echo "No se pudo agregar el usuario.";
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
								<a href = "Opciones_Usu.php" class = "d-block h3 font-weight-normal" > Regresar <br>
								<small class = "d-block text-muted text-small" > Menu </small>
								</a>
							</div>
							
							<div class = "col-md-6 text-right" >
								<a href = "nuevoUsuario.php" class = "d-block h3 font-weight-normal" >
								Agregar <br>
								<small class = "d-block text-muted text-small" > Otro usuario </small>
								</a>
							</div>
						</div>
					</section>
				</article>
			</section>
		</body>
	</html>