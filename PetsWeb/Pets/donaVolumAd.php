<?php
// Start the session
session_start();
?>
<?php

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$userName = $_SESSION['NU'];
$canti = $_POST['canti'];
$nomAsocia = $_POST['nom'];

       
$query_procedimiento = oci_parse($conn, "BEGIN donacion.donar_voluntaria(:p1, :p2, :p3); END;");  
	$cursor = oci_new_cursor($conn);
	oci_bind_by_name($query_procedimiento,':p1', $userName);
	oci_bind_by_name($query_procedimiento,':p2', $nomAsocia);
	oci_bind_by_name($query_procedimiento,':p3', $canti);
	oci_execute($query_procedimiento);
	?> 
    <script language="javascript"> 
        alert("Su donación fue realizada éxitosamente!"); 
    </script> 
    <?php 
    header("refresh:0; url=checkDonacionesAD.php");
       

?>