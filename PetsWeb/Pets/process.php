<?php
	$tag = $_POST['tag'];

	if(isset($tag) && $tag !== ''){
		if ($tag == 'login'){
			if ($_POST['NombreUsuario'] == 'luis')
				echo 'True';
			echo 'false';
		}
	}

?>