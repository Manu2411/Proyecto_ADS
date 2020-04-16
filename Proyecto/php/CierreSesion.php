<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Cerrando Sesión</title>
		</head>

		<body>
			<?php
				session_start();

				session_destroy();

				header("location:../Acceso_Admin.html");
			?>
		</body>
	</html>