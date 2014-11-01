<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	$var1 = $_POST['nombre'];  
	$var2 = $_POST['nombre_usuario'];
	$var3 = $_POST['contrasena'];
	$var4 = $_POST['confirm_constrasena'];  
	$var5 = '83875768';
	$var6 = 'emmanuelrs@gmail.com';
	$var7 = 'Costa Rica';  
	$var8 = $_POST['Provincia'];
	$var9 = 'Atenas';
	$var10= 'Jesus';
	$var11= 'Sabana Larga';
	
/*
if($var1 && $var2 && $var3 && $var4 && $var5){

	//if $var3 == $var4){

	$stid = oci_parse($conn, 'begin insertions.set_usuario(:p1, :p2, :p3, :p5, :p6, :p7, :p8, :p9, :p10,:p11); end;');
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
	oci_execute($stid);
	oci_free_statement($stid);
	oci_close($conn);
	?> 
    <script language="javascript"> 
        alert("Usuario registrado exitosamente!");
    </script> 
    <?php
	header("refresh:0; url=index.php");


//} else{  
  //  <script language="javascript"> 
    //    alert("Contrase~nas no coinciden");
  //  </script> 
    //<?php}

	
}
else{
	?> 
    <script language="javascript"> 
        alert("Error: Debe completar todo los campos!"); 
    </script> 
    <?php 
    header("refresh:0; url=registrarPersona.php");
}*/
?>