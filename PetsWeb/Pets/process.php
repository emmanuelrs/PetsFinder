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
 

$query_procedimiento = oci_parse($conn, "BEGIN :cursor :=matc.match2; END;");
$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);

foreach ($array as $fila) {
	$subject = 'Coincidencia Encontrada! PetsFinder!';
	$to = $fila['VALOR_EMAIL'];
	$message = 'Estimado '.$fila['NOMBRE'].'  '.$fila['APELLIDO1'].' :'. "\r\n" .'El servicio de búsqueda automática de PetsFinder encontró un match con la mascota que reportó como perdida, por favor ingrese a la página utilizando el siguiente ID: '.$fila['ID_MASCOTA_PER'].'Para ver el resultado de la búsqueda'. "\r\n"  .'Muchas Gracias.';
	$headers = 'From: PetsFinder@gmail.com' . "\r\n"  .'Reply-To: PetsFinder@gmail.com' . "\r\n"  .'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);

}

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
$r = oci_execute($query_procedimiento);
$s = oci_execute($cursor, OCI_DEFAULT);
if(!$r){

	?> 
    <script language="javascript"> 
        alert("Error: El usuario o contraseña no existen!"); 
    </script> 
    <?php 
    header("refresh:0; url=sesion.php");

}else{
	oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
	foreach ($array as $fila) {
		$tipoUser = $fila['TIPO_USER'];
		$idpersona= $fila['ID_USUARIO'];}

	if($tipoUser == 1){
		$_SESSION['IDU'] = $idpersona;
		header('Location: index activo.php');}

	else if($tipoUser == 2){
		$_SESSION['IDU'] = $idpersona;
		header('Location: index activo admin.php');}

}

?>