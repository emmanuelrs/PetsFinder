<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

	$var1 = $_POST['nombre'];  
	$var2 = $_POST['raza'];
	$var3 = $_POST['tamaño'];
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
    $var15 = $_POST['datepicker'];
    $var16 = 1;
    $target_path = basename($_FILES['uploadedfile']['name']); 
	$imagen = (string)$target_path;

echo $var1;
echo $var2;
echo $var3;
echo $var5;
echo $var6;
echo $var7;
echo $var8;
echo $var9;
echo $var10;
echo $var11;
echo $var12;
echo $var13;
echo $var14;
echo $var15;
echo $imagen;

?> 
