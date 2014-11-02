<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$var1 = $_POST['name'];  
	$var2 = $_POST['chip'];
	$var3 = $_POST['color'];
	$var4 = $_POST['distrito'];  
	$var5 = $_POST['detalle_direccion'];
	$var6 = $_POST['descripcion'];


	echo($var1);
	echo($var2);
	echo($var3);
	echo($var4);
	echo($var5);
	echo($var6);

?>