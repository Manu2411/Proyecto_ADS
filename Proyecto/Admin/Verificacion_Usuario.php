<?php

	try {
		$base = new PDO("mysql:host=localhost:3308; dbname=sirama" , "root", "");

		// $base = new PDO("mysql:host=localhost; dbname=sirama" , "root", ""); <-- Usar esta si no funciona la de arriba

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM usuarios WHERE Usuario = :login AND Clave = :password";

		$resultado = $base->prepare($sql);

		$login = htmlentities(addslashes($_POST["usuario"]));
		$pass = htmlentities(addslashes($_POST["password"]));

		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $pass);

		$resultado->execute();

		$num_registro =$resultado->rowCount();

		if($num_registro != 0){

			session_start();

			$_SESSION["usuario"] = $_POST["usuario"];

			header("location:Principal.php");
		}
		else{
			header("location:../Acceso_Admin.html");
		}

	}
	catch(Exception $e){
		die("Error: " . $e->getMessage());
	}
?>