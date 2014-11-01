<?php
	$nombre = $_POST['NombreUsuario'];
	$pass = $_POST['Contraseña'];

	echo $nombre;
	echo $pass;
	if( $nombre !== ''){
		if($pass == '123queso'){
			header('refresh: 0; url=index.php');
		};

	};
?>