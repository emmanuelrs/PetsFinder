<?php
	
	$nombre = $_POST['NombreUsuario'];
	$pass = $_POST['Contraseña'];


	if(isset($tag) && $tag !== ''){
		if ($tag == 'login'){
			if ($_POST['NombreUsuario'] == 'luis')
				echo 'True';
			echo 'false';
		}
	}

?>