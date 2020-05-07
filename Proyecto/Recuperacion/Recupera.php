<?php
	if (isset($_POST['check'])) {
		$usu = $_POST['usuario'];
		$nueva = $_POST['nueva'];
		$phra = $_POST['frase'];
	}
?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
			<title>Modificación de Contraseña</title>
			<link rel="stylesheet" type="text/css" href="css/form.css">

			<!-- Icono de la fundación -->
			<link rel = "icon" href = "../img/Icono/Logo.ico" />
			
			<script src="js/validar.js"></script>
		</head>

		<body>
			<div class="box">
				<h1>Ingresa tu usuario</h1>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validar();">
					<div class="inputBox">
						<input type="text" id="user" name="usuario" required>
						<label>USUARIO</label>
					</div>

					<div class="inputBox">
						<input type="password" id="new" name="nueva" required>
						<label>NUEVA CONTRASEÑA</label>
					</div>

					<div class="inputBox">
						<input type="password" id="fra" name="frase" required>
						<label>FRASE CLAVE</label>
					</div>

					<div class="center">
						<input type="submit" name = "check" value="Verificar">	
					</div>
				</form>

				<br>

				<?php include("php/verifi.php"); ?>
			</div>
		</body>
	</html>