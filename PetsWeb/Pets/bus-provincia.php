<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$provincia = $_POST['busqueda'];	
$division = '';
$query_procedimiento = oci_parse($conn, "BEGIN :cursor := busquedas.busquedaprovincia(:busq); END;");

$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':busq', $provincia);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
foreach ($array as $fila) {
	$division =  $division."<br></br>Nombre de la mascota: ".$fila['NOMBRE_ENC']."<br></br> Estado: "
	.$fila['ESTADO_ENC']."<br></br> País: ".$fila['PAIS']."<br></br> Provincia: ".$fila['PROVINCIA'];}


echo $division;

?>