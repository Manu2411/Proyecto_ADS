<?php
	session_start();

	if (!isset($_SESSION["usuario"])) {
	header("location:../../../Acceso_Admin.php");
	}
?>

<?php 
	@$db = new mysqli( 'localhost' , 'root' , '' , 'sirama', '3306' );

	// @$db = new mysqli('localhost','root','','sirama'); <-- Utilizar esta si no funciona la de arriba
	
	//Establecer el conjunto de caracteres a utf8
	$db->set_charset( "utf8" );

	if (mysqli_connect_errno()) {
		$msgerror = "Error: no se puede conectar a la base de datos";
		$msgerror .= "Contacte con soporte para resolver el problema";
		echo $msgerror;
		exit ( 0 );
	}

	echo "<title>Eliminando Beneficiaria</title>";
	echo "<meta charset = \"utf-8\" />";

	$id = $_GET[ 'id' ];
	$sql = " SELECT * FROM beneficiarias WHERE Id_Bene = '" . $id . "'";
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
	$msg = "<script text=\"text/javascript\">\n";
	$preg = "Deseas eliminar a beneficiaria de: ";
	$preg .= "Id = " . $row[ 'Id_Bene' ] . ", ";
	$preg .= "Nombre = " . $row[ 'Nombre' ] . ".";
	$msg .= "if(confirm(\"" . $preg . "\")){";
	$msg .= "location.href=\"mostrar_bene.php?opc=eliminar&del=s&id=". $id. "\";}";
	$msg .= "else{location.href=\"mostrar_bene.php?opc=eliminar&del=n\";}
	</script>";
	
	echo utf8_decode($msg);
?>