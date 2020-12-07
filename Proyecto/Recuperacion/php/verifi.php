<?php
    if (isset($_POST['check'])) {
		try {
			$base = new PDO("mysql:host=localhost:3306; dbname=sirama" , "root", "");
	
			// $base = new PDO("mysql:host=localhost; dbname=sirama" , "root", ""); <-- Usar esta si no funciona la de arriba
	
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
			$sql = "SELECT * FROM usuarios WHERE Usuario = :login";
	
			$resultado = $base->prepare($sql);
	
            $login = htmlentities(addslashes($_POST["usuario"]));
            $new = htmlentities(addslashes($_POST["nueva"]));
			$cla = htmlentities(addslashes($_POST["frase"]));
	
			$resultado->bindValue(":login", $login);
	
			$resultado->execute();
	
			$num_registro =$resultado->rowCount();
	
			if($num_registro != 0 && $cla == "FUNDACIONSIRAMA"){

                //Creando la consulta de actualización con los datos
                //enviados del formulario de modificación de libros
                
                $consulta = "update usuarios set Clave = '" . $new .  "' WHERE Usuario = '" . $login . "'";

                $resultc = $base->prepare($consulta);

                //Ejecutando la consulta de actualización
                $resultc->execute();

                //Obteniendo el número de registros actualizados
                $num_results = $resultc->rowCount();

                echo "<div>\n\t<p class=\"check\">" ;
                echo "\t\t" . $num_results . " fila(s) actualizada(s)\n";
                echo "\t</p>\n</div>\n";

                echo "<h3 class = 'check'> * Contraseña actualizada * </h3>";

                echo "<a id = 'link' href='../Acceso_Admin.php'>Regresar al logueo</a>";

			}
			else{
                echo "<h3 class = 'error'> * USUARIO NO REGISTRADO * </h3>\n";
                echo "<a id = 'link' href='../Acceso_Admin.php'>Regresar al logueo</a>";
                
			}
	
		}
		catch(Exception $e){
			die("Error: " . $e->getMessage());
		}
	}
?>