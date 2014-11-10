
<?php

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$idPer = $_POST["id_user"];
$Cali = $_POST["calificacion"];
$division = '';


if($Cali <= 5){
        
    $query_procedimiento = oci_parse($conn, "BEGIN fun_administrador.calificar(:p1, :p2); END;");  
	$cursor = oci_new_cursor($conn);
	oci_bind_by_name($query_procedimiento,':p1', $idPer);
	oci_bind_by_name($query_procedimiento,':p2', $Cali);
	oci_execute($query_procedimiento);
       
}
?>