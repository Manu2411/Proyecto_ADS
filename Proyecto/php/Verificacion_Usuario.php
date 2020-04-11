<?php
	include("Conexion.php");

	//validación del modal: Login
	if(isset($_POST['ingresar'])){
		$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
		$password = isset($_POST['password']) ? $_POST['password'] : null;
		ingresar($usuario, $password);		
	}
?>