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
    $fecha = (string)$var15
    $target_path = basename($_FILES['uploadedfile']['name']); 
	$imagen = (string)$target_path;

	/*if($var7 == "Encontrada"){
        
        $stid = ociparse($conn, "BEGIN  insertions.set_mascota_encontrada(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16,:p17); END;");
        
    }else if($var7 == "Perdida"){
        
        $stid = ociparse($conn, "BEGIN insertions.set_mascota_perdida(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16,:p17); END;");
      
    }


    oci_bind_by_name($stid, ':p1', $var1);
    oci_bind_by_name($stid, ':p2', $var2);
    oci_bind_by_name($stid, ':p3', $var3);
    oci_bind_by_name($stid, ':p4', $imagen);
    oci_bind_by_name($stid, ':p5', $var5);
    oci_bind_by_name($stid, ':p6', $var6);
    oci_bind_by_name($stid, ':p7', $var7);
    oci_bind_by_name($stid, ':p8', $var8);
    oci_bind_by_name($stid, ':p9', $var9);
    oci_bind_by_name($stid, ':p10', $var10);
    oci_bind_by_name($stid, ':p11', $var11);
    oci_bind_by_name($stid, ':p12', $var12);
    oci_bind_by_name($stid, ':p13', $var13);
    oci_bind_by_name($stid, ':p14', $var14);
    oci_bind_by_name($stid, ':p15', $fecha);
    oci_bind_by_name($stid, ':p16', $var16);
    
	oci_execute($stid);
	oci_free_statement($stid);
    oci_close($conn);

*/


?> 
