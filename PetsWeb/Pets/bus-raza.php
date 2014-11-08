<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$razaAbuscar = $_POST['Raza']; 

/*
	echo($var1);
*/
$query_procedimiento = oci_parse($conn, "BEGIN :cursor := busquedas.busquedaRaza(:razaAbuscar); END;");  	

?>