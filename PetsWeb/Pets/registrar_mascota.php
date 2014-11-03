<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$var1 = $_POST['name'];  
	$var2 = $_POST['raza'];
	$var3 = $_POST['tamaño'];
//Imagen 
	$var5 = $_POST['chip'];
	$var6 = $_POST['color'];
	$var7 = $_POST['estado'];
	$var8 = 'Costa Rica';
	$var9 = $_POST['Provincia'];
	$var10 = $_POST['Canton'];
	$var11 = $_POST['distrito'];
	$var12 = $_POST['message'];
	$var13 = $_POST['recompenza'];
	$var14 = $_POST['descripcion'];
    $var15 = 'fecha';
    $var16 = 1;

?> 