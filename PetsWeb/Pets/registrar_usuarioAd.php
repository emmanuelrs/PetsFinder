<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$var1 = $_POST['nombre']; 
	$var2 = $_POST['apellido1'];
	$var3 = $_POST['apellido2'];  
	$var4 = $_POST['nombre_usuario'];
	$var5 = $_POST['contrasena'];
	$var6 = $_POST['confirm_contrasena'];  
	$var7 = $_POST['telefono'];
	$var8 = $_POST['email'];
	$var9 = 'Costa Rica';  
	$var10 = $_POST['Provincia'];
	$var11 = $_POST['Canton'];
	$var12 = $_POST['distrito'];
	$var13 = $_POST['direc'];

/*
	echo($var1);
	echo($var2);
	echo($var3);
	echo($var4);
	echo($var5);
	echo($var6);
	echo($var7);
	echo($var8);
	echo($var9);
	echo($var10);
	echo($var11);*/
	
if($var1 && $var2 && $var3 && $var4 && $var5){
	if($var5 == $var6){
	$stid = oci_parse($conn, 'begin insertions.set_usuario(:p1, :p2, :p3, :p5, :p6, :p7, :p8, :p9, :p10,:p11,:p12,:p13); end;');
	oci_bind_by_name($stid, ':p1',  $var1);
	oci_bind_by_name($stid, ':p2',  $var2, 40);
	oci_bind_by_name($stid, ':p3',  $var3);
	oci_bind_by_name($stid, ':p5',  $var5);
	oci_bind_by_name($stid, ':p6',  $var6);
	oci_bind_by_name($stid, ':p7',  $var7);
	oci_bind_by_name($stid, ':p8',  $var8);
	oci_bind_by_name($stid, ':p9',  $var9);
	oci_bind_by_name($stid, ':p10', $var10);
	oci_bind_by_name($stid, ':p11', $var11);
	oci_bind_by_name($stid, ':p12', $var12);
	oci_bind_by_name($stid, ':p13', $var13);
	oci_execute($stid);
	oci_free_statement($stid);
	oci_close($conn);
	?>
	<script>
    
    alert("Se registro el usuario correctamente :)");
    </script>
    <?php

    header('refresh:0; url=index.php');

    } else{

	?>
	<script>
    alert("Las contrase~nas no coinciden");
    </script>

<?php

header('refresh:0; url=registraPersonaAd.php');
}}	

?>