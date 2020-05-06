<?php
	if (isset($_POST['access'])) {
		$usu = $_POST['usuario'];
		$pass = $_POST['password'];
	}
?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
			<title>Acceso</title>
			<link rel="stylesheet" type="text/css" href="css/form.css">

			<!-- Icono de la fundación -->
			<link rel = "icon" href = "img/Icono/Logo.ico" />
			
			<script src="js/validar.js"></script>
		</head>

		<body>
			<div class="box">
				<h1>BIENVENIDO</h1>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validar();">
					<div class="inputBox">
						<input type="text" id="user" name="usuario" required>
						<label>USUARIO</label>
					</div>
					<div class="inputBox">
						<input type="password" id="contra" name="password" required>
						<label>CONTRASEÑA</label>
					</div>
					<div class="center">
						<input type="submit" name = "access" value="INGRESAR">	
					</div>
					<?php include("Admin/Verificacion_Usuario.php"); ?> 
				</form>
			</div>
		</body>
	</html>