<?php

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$raza = $_POST['busqueda'];
$division = '';

$query_procedimiento = oci_parse($conn, "BEGIN :cursor := busquedas.busquedaraza_adop(:busq); END;");  
$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':busq', $raza);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
foreach ($array as $fila) {
	$division = $division .' <div id="general"> <div id="foticas"><img src ="img/casa.png"'.'width=300px height = 350px></div>
	<br></br>Nombre: '.$fila['NOMBRE'].'<br></br> Apellido: '.$fila['APELLIDO1'].'<br></br> Calificación: '.$fila['CALIFICACION'].'<br></br> Email: '
	.$fila['VALOR_EMAIL']."<br></br> Teléfono: ".$fila['TELEFONO']."<br></br> Provincia: ".$fila['PROVINCIA']."<br></br> Cantón: ".$fila['CANTON']
	."<br></br> Dirreción: ".$fila['DIRECCION_EXACTA']."<br></br> Requiere Alimento: ".$fila['REQUIERE_ALIMENTO'];}

echo $division;

?>