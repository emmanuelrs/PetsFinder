<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$var1 = $_POST['nombre']; 
	$var2 = $_POST['telefono'];
	$var3 = $_POST['email'];
	$var4 = 'Costa Rica';  
	$var5 = $_POST['Provincia'];
	$var6 = $_POST['Canton'];
	$var7 = $_POST['distrito'];
	$var8 = $_POST['direc'];
	
if($var1 && $var2 && $var3 && $var4 && $var5 && $var6 && $var7 && $var8){
	$stid = oci_parse($conn, 'begin insertions.set_organizacion(:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8); end;');
	oci_bind_by_name($stid, ':p1',  $var1);
	oci_bind_by_name($stid, ':p2',  $var2, 40);
	oci_bind_by_name($stid, ':p3',  $var3);
	oci_bind_by_name($stid, ':p4',  $var4);
	oci_bind_by_name($stid, ':p5',  $var5);
	oci_bind_by_name($stid, ':p6',  $var6);
	oci_bind_by_name($stid, ':p7',  $var7);
	oci_bind_by_name($stid, ':p8',  $var8);
	oci_execute($stid);
	oci_free_statement($stid);
	oci_close($conn);
	?>
	<script>
    alert("Se registro la asociación correctamente :)");
    </script>
    <?php

    header('refresh:0; url=index.php');
}	

?>