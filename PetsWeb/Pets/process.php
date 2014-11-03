<?php
// Start the session
session_start();
?>

<?php
    
	$nombre = $_POST['NombreUsuario'];
	$pass = $_POST['Contraseña'];
	$_SESSION["NU"] = $nombre;
    

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$query_procedimiento = oci_parse($conn, "BEGIN :cursor :=  consultas.valida_usuario(:nombre, :contrasena); END;");
$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':nombre', $nombre);
oci_bind_by_name($query_procedimiento,':contrasena', $pass);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);

foreach ($array as $fila) {

	$idpersona = $fila['ID_USUARIO'];
}
if($idpersona){
	$_SESSION['IDU'] = $idpersona;
	header('Location: index.php');
}
else{
	echo 'No esta registrado';
}


?>